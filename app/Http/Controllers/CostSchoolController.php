<?php

namespace App\Http\Controllers;

use App\Model\Cost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CostSchoolController extends Controller
{
    public function Index(){
        $auth = Auth::user();
        $costs = Cost::where('school_id',$auth->school_id)->get();
        return view('cost.school.index')->withCosts($costs);
    }
}
