<?php

namespace App\Http\Controllers;

use App\Model\Project;
use App\Model\YearBudget;
use Illuminate\Http\Request;
use App\Helper\DateConversion;

class ProjectController extends Controller
{
    public function Index(){
        $projects = Project::get();
        return view('project.index')->withProjects($projects);
    }
    public function Create(){
        $yearbudgets = YearBudget::get();
        return view('project.create')->withYearbudgets($yearbudgets);
    }
    public function CreateSave(Request $request){
        $project = new Project();
        $project->year_budget_id = $request->yearbudget;
        $project->name = $request->project;
        $project->budget = $request->budget;
        $project->start = DateConversion::thaiToEngDate($request->start);
        $project->end = DateConversion::thaiToEngDate($request->end);
        $project->note = $request->note;
        $project->save();
        return redirect()->back()->withSuccess('เพิ่มโครงการสำเร็จ'); 
    }
    public function Delete($id){
        $check = Project::find($id);
        if($check->status == 1){
            return redirect()->back()->withError('ไม่สามารถลบโครงการที่ใช้อยู่'); 
        }else{
            Project::find($id)->delete();
            return redirect()->back()->withSuccess('ลบโครงการสำเร็จ'); 
        }
    }
    public function Select($id){
        Project::where('status' , 1)->update([ 'status' => 0]);
        Project::find($id)->update(['status' => 1]);
        return redirect()->back()->withSuccess('เลือกโครงการสำเร็จ'); 
    }
}