<?php

namespace App\Http\Controllers;

use App\Model\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingSchoolRoomController extends Controller
{
    public function Index(){
        $auth = Auth::user();
        $classrooms = ClassRoom::where('school_id',$auth->school_id)->get();
        return view('setting.school.room.index')->withClassrooms($classrooms);
    }
}
