<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use App\Helper\CreateDemoProject;
use App\Http\Controllers\Controller;

class DemoDataController extends Controller
{
    public function Create(){
        CreateDemoProject::createDemoProject();
        return redirect()->back()->withSuccess('เพิ่มข้อมูลทดสอบสำเร็จ');
    }
}
