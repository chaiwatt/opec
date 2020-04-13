<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingGeneralApiController extends Controller
{
    public function Index(){
        return view('setting.general.api.index');
    }
}
