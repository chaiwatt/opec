<?php

namespace App\Model;

use App\Model\School;
use App\Model\SubsidyCategory;
use App\Model\ProvincialEducation;
use App\Model\TransferTransaction;
use Illuminate\Database\Eloquent\Model;

class AllocationTransaction extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    public function getSubsidyCategoryAttribute(){
        return SubsidyCategory::find($this->subsidy_category_id);
    }

    public function getProvincialEducationAttribute(){
        return ProvincialEducation::find($this->provincial_education_id);
    }

    public function getCreateAtThaiAttribute(){
        $strDate = $this->created_at;
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        return $strDay .'/'. $strMonth .'/'.$strYear .' '. $strHour . ':' . $strMinute . ':' . $strSeconds;
    }
    
    public function getTransferTransactionAttribute(){
        return TransferTransaction::where('allocation_transaction_id',$this->id)->first();
    }

    public function getProvincialSubAreaEducationAttribute(){
        return ProvincialSubAreaEducation::find($this->provincial_sub_area_education_id);
    }

    public function getSchoolAttribute(){
        return School::find($this->school_id);
    }
    
}
