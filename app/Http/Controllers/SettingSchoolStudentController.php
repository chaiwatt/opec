<?php

namespace App\Http\Controllers;

use App\Model\Blood;
use App\Model\Amphur;
use App\Model\Gender;
use App\Model\Prefix;
use App\Model\Tambol;
use App\Model\Student;
use App\Model\Province;
use App\Model\Religion;
use App\Model\Ethnicity;
use App\Model\Nationality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingSchoolStudentController extends Controller
{
    public function Index(){
        $auth = Auth::user();
        $students = Student::where('school_id',$auth->school_id)->get();
        return view('setting.school.student.index')->withStudents($students);
    }
    public function Create(){
        $auth = Auth::user();
        $provinces = Province::get();
        $prefixes = Prefix::get();
        $genders = Gender::get();
        $bloods = Blood::get();
        $nationalities = Nationality::get();
        $ethnicities = Ethnicity::get();
        $religions = Religion::get();
        return view('setting.school.student.create')->withProvinces($provinces)
                                                ->withPrefixes($prefixes)
                                                ->withGenders($genders)
                                                ->withBloods($bloods)
                                                ->withNationalities($nationalities)
                                                ->withEthnicities($ethnicities)
                                                ->withReligions($religions);
    }
}
