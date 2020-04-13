<?php

namespace App\Http\Controllers;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Model\ProjectAllocation;
use App\Model\AllocationTransaction;
use Illuminate\Support\Facades\Auth;

class DashboardProvincialAreaController extends Controller
{
    public function Index(){
        $user = Auth::user();
        $project = Project::where('status',1)->first();
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)
                                                    ->where('provincial_education_id',$user->provincial_education_id)
                                                    ->where('allocation_type',2)
                                                    ->where('provincial_sub_area_education_id',$user->provincial_sub_area_education_id)->get();
        return view('dashboard.provincialarea.index')->withProjectallocations($projectallocations)
                                                ->withAllocationtransactions($allocationtransactions);
    }
}
