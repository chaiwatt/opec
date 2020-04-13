<?php

namespace App\Http\Controllers;

use App\Model\ClassLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingSchoolClassController extends Controller
{
    public function Index(){
        $auth = Auth::user();
        $classlevels = ClassLevel::where('school_id',$auth->school_id)->get();
        return view('setting.school.class.index')->withClasslevels($classlevels);
    }
}
