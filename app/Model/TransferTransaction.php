<?php

namespace App\Model;

use App\Model\AllocationTransaction;
use Illuminate\Database\Eloquent\Model;

class TransferTransaction extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    public function getAllocationTransactionAttribute(){
        return AllocationTransaction::find($this->allocation_transaction_id);
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
}
