<?php

namespace App\Http\Controllers;

use App\Model\School;
use Illuminate\Http\Request;
use App\Model\SchoolBankAccount;
use Illuminate\Support\Facades\Auth;

class SchoolInfoController extends Controller
{
    public function Index(){
        $auth = Auth::user();
        $school = School::find($auth->school_id);
        $schoolbankaccounts = SchoolBankAccount::where('school_id',$auth->school_id)->get();
        return view('school.info.index')->withSchool($school)->withSchoolbankaccounts($schoolbankaccounts);
    }
}
