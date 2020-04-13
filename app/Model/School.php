<?php

namespace App\Model;

use App\Model\SchoolLicense;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    public function getSchoolLicenseAttribute(){
        return SchoolLicense::find($this->school_license_id);
    }
}
