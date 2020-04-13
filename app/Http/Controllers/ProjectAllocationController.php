<?php

namespace App\Http\Controllers;

use App\Model\Project;
use App\Model\YearBudget;
use Illuminate\Http\Request;
use App\Model\SubsidyCategory;
use App\Model\ProjectAllocation;

class ProjectAllocationController extends Controller
{
    public function Index($id){
        $projectallocations = ProjectAllocation::where('project_id',$id)->get();
        $project = Project::find($id);
        return view('project.allocation.index')->withProject($project)
                                            ->withProjectallocations($projectallocations);
    }
    public function Create($id){
        $project = Project::find($id);
        $subsidycategories = SubsidyCategory::get();
        return view('project.allocation.create')->withProject($project)
                                            ->withSubsidycategories($subsidycategories);
    }

    public function CreateSave(Request $request,$id){
        if(array_sum($request->subsidycategory) != Project::find($id)->budget){
            return redirect()->back()->withError('จำนวนเงินจัดสรรรวมไม่เท่ากับเงินตั้งต้น');
        }
        foreach( $request->subsidycategory as $key => $budget ){
            if(($budget != 0) && !Empty($budget) ){
                echo 'category: ' . $key . ' budget: ' . $budget . '<br />';
                $projectallocation = new ProjectAllocation();
                $projectallocation->project_id = $id;
                $projectallocation->subsidy_category_id = $key;
                $projectallocation->budget = $budget;
                $projectallocation->save();
            } 
        }
        return redirect()->back()->withSuccess('จัดสรรรจำนวนเงินสำเร็จ');
    }

               
}

