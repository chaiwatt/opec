<?php

namespace App\Http\Controllers\Api;

use App\Model\YearBudget;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingGeneralController extends Controller
{
    public function SelectYear(Request $request){
        YearBudget::where('status' , 1)->update([ 'status' => 0]);
        YearBudget::find($request->id)->update(['status' => 1]);
        return response()->json(YearBudget::get()); 
    }
    public function AddYear(Request $request){
        if((Empty(YearBudget::where('name',$request->year)->first()))){
            $yearbudget = new YearBudget();
            $yearbudget->status = 0;
            $yearbudget->name = $request->year;
            $yearbudget->save();
        }
        return response()->json(YearBudget::get()); 
    }

}
