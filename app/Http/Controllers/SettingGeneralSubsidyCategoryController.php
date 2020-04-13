<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SubsidyCategory;

class SettingGeneralSubsidyCategoryController extends Controller
{
    public function Index(){
        $subsidycategories = SubsidyCategory::get();
        return view('setting.general.subsidycategory.index')->withSubsidycategories($subsidycategories);
    }
}
