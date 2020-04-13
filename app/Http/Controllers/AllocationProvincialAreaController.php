<?php

namespace App\Http\Controllers;

use App\Model\School;
use App\Model\Project;
use Illuminate\Http\Request;
use App\Model\ProjectAllocation;
use App\Model\AllocationTransaction;
use Illuminate\Support\Facades\Auth;
use App\Model\ProvincialSubAreaEducation;

class AllocationProvincialAreaController extends Controller
{
    public function Index(){
        $user = Auth::user();
        $project = Project::where('status',1)->first();
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)
                                                    ->where('provincial_education_id',$user->provincial_education_id)
                                                    ->where('allocation_type',3)
                                                    ->where('provincial_sub_area_education_id',$user->provincial_sub_area_education_id)->get();
        return view('allocation.provincialarea.index')->withProjectallocations($projectallocations)
                                                ->withAllocationtransactions($allocationtransactions);
    }

    public function Create(){
        $user = Auth::user();
        $project = Project::where('status',1)->first();
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)
                                                    ->where('provincial_education_id',$user->provincial_education_id)
                                                    ->where('allocation_type',2)
                                                    ->where('provincial_sub_area_education_id',$user->provincial_sub_area_education_id)->get();
        $schools = School::where('provincial_sub_area_education_id',$user->provincial_sub_area_education_id)->get();
        $provincialsubareaeducations = ProvincialSubAreaEducation::where('provincial_education_id',$user->provincial_education_id)->get();
        return view('allocation.provincialarea.create')->withProjectallocations($projectallocations)
                                                ->withAllocationtransactions($allocationtransactions)
                                                ->withProvincialsubareaeducations($provincialsubareaeducations)
                                                ->withSchools($schools);
    }
    
    public function CreateSave(Request $request){
        $project = Project::where('status',1)->first();
        
        foreach( $request->projectallocation as $key1 => $item ){
            foreach( $item as $key2 => $budget ){
                $school = School::find($key2);
                if(($item != 0 && !Empty($budget))){                   
                    $check = AllocationTransaction::where('project_id',$project->id)
                                                ->where('subsidy_category_id',$key1)
                                                ->where('provincial_education_id',$key2)
                                                ->where('allocation_type',3)->first();
                    if(Empty($check)){
                        $allocationtransaction = new AllocationTransaction();
                        $allocationtransaction->project_id = $project->id;
                        $allocationtransaction->subsidy_category_id = $key1;
                        $allocationtransaction->provincial_education_id = ProvincialSubAreaEducation::find($key1)->provincial_education_id;
                        $allocationtransaction->budget = $budget;
                        $allocationtransaction->allocation_type = 3;
                        $allocationtransaction->school_id = $key2;
                        $allocationtransaction->provincial_sub_area_education_id = $school->provincial_sub_area_education_id;
                        $allocationtransaction->save();
                    }
                }
            }
        }
        return redirect()->back()->withSuccess('จัดสรรงบประมาณสำเร็จ');
    }
}
