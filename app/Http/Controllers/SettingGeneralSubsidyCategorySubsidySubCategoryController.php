<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SubsidySubCategory;

class SettingGeneralSubsidyCategorySubsidySubCategoryController extends Controller
{
    public function Index(){
        $subsidysubcategories = SubsidySubCategory::get();
        return view('setting.general.subsidycategory.subsidysubcategory.index')->withSubsidysubcategories($subsidysubcategories);
    }
}
