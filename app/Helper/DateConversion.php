<?php
namespace App\Helper;

use Carbon\Carbon;

class DateConversion
{
    public static function thaiToEngDate($thaidate){
        $tmp = explode("/", $thaidate);
        return ((int)$tmp[2]-543) . "-" . $tmp[1] . "-" .$tmp[0];
    }

    public static function  engToThaiDate($engdate){
        $tmp = explode("-", $engdate);
        $datethai = ((int)$tmp[0]+543) . "-" . $tmp[1] . "-" . $tmp[2];
        return Carbon::createFromFormat('Y-m-d', $datethai)->format('d/m/Y');
    }
}