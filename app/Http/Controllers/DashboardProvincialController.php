<?php

namespace App\Http\Controllers;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Model\AllocationTransaction;
use Illuminate\Support\Facades\Auth;

class DashboardProvincialController extends Controller
{
    public function Index(){
        $project = Project::where('status',1)->first();
        $auth = Auth::user();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)
                                                    ->where("provincial_education_id",$auth->provincial_education_id)
                                                    ->where('allocation_type',1)
                                                    ->get();
        return view('dashboard.provincial.index')->withAllocationtransactions($allocationtransactions);
    }
}
