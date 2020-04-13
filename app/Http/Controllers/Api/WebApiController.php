<?php

namespace App\Http\Controllers\Api;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AllocationTransaction;

class WebApiController extends Controller
{
    public function Project(){
        return response()->json(Project::get()); 
    }

    public function Allocation($id){
        return response()->json(AllocationTransaction::where('project_id',$id)->get()); 
    }
}
