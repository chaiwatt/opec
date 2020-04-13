<?php

namespace App\Model;

use App\Model\CostType;
use App\Model\SubsidySubCategory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    //
    protected $fillable = [];
    protected $guarded = [];

    public function getSubsidySubCategoryAttribute(){
        return SubsidySubCategory::find($this->subsidy_sub_category_id);
    }

    public function getCostTypeAttribute(){
        return CostType::find($this->cost_type_id);
    }
}
