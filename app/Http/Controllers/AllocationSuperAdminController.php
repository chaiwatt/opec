<?php

namespace App\Http\Controllers;

use App\Model\Project;
use App\Model\YearBudget;
use Illuminate\Http\Request;
use App\Model\SubsidyCategory;
use App\Model\ProjectAllocation;
use App\Model\ProvincialEducation;
use App\Model\AllocationTransaction;

class AllocationSuperAdminController extends Controller
{
    public function Index(){
        $project = Project::where('status',1)->first();
        $provincialeducations = ProvincialEducation::get();
        $subsidycategories = SubsidyCategory::get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)
                                                    ->where('allocation_type',1)->get();
        return view('allocation.superadmin.index')->withProvincialeducations($provincialeducations)
                                            ->withSubsidycategories($subsidycategories)
                                            ->withAllocationtransactions($allocationtransactions);
    }

    public function Create(){
        $project = Project::where('status',1)->first();
        $provincialeducations = ProvincialEducation::get();
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)->where('allocation_type',1)->get();
        return view('allocation.superadmin.create')->withProvincialeducations($provincialeducations)
                                                ->withProjectallocations($projectallocations)
                                                ->withAllocationtransactions($allocationtransactions);
    }

    public function CreateSave(Request $request){
        $project = Project::where('status',1)->first();
        foreach( $request->projectallocation as $key1 => $item ){
            foreach( $item as $key2 => $budget ){
                if(($item != 0 && !Empty($budget))){                   
                    $check = AllocationTransaction::where('project_id',$project->id)
                                                ->where('subsidy_category_id',$key1)
                                                ->where('provincial_education_id',$key2)
                                                ->where('allocation_type',1)->first();
                    if(Empty($check)){
                        $allocationtransaction = new AllocationTransaction();
                        $allocationtransaction->project_id = $project->id;
                        $allocationtransaction->subsidy_category_id = $key1;
                        $allocationtransaction->provincial_education_id = $key2;
                        $allocationtransaction->budget = $budget;
                        $allocationtransaction->allocation_type = 1;
                        $allocationtransaction->save();
                    }
                }
            }
        }
        return redirect()->back()->withSuccess('จัดสรรงบประมาณสำเร็จ');
    }
}
