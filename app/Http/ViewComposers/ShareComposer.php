<?php
namespace App\Http\ViewComposers;
use Auth;
use App\User;
use App\Model\School;
use Illuminate\View\View;
use App\Model\GeneralInfo;

class ShareComposer
{
    public function compose (View $view)
    {
        $generalinfo = GeneralInfo::get()->first();
        $view->with('generalinfo', $generalinfo);
    }
}