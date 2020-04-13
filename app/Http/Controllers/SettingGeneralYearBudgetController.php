<?php

namespace App\Http\Controllers;

use App\Model\YearBudget;
use Illuminate\Http\Request;

class SettingGeneralYearBudgetController extends Controller
{
    public function Index(){
        $yearbudgets = YearBudget::get();
        return view('setting.general.yearbudget.index')->withYearbudgets($yearbudgets);
    }
    public function Delete($id){
        $yearbudget = YearBudget::find($id);
        if($yearbudget->status == 1){
            return redirect()->route('setting.general.yearbudget.index')->withError('ไม่สามารถลบปีงบประมาณที่ใช้งาน');
        }else{
            $yearbudget->delete();
            return redirect()->route('setting.general.yearbudget.index')->withSuccess('ลบปีงบประมาณสำเร็จ');
        }
    }
}
