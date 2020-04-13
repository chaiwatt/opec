<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSuperAdminController extends Controller
{
    public function Index(){
        return view('dashboard.superadmin.index');
    }
}
