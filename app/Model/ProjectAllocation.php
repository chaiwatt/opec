<?php

namespace App\Model;

use App\Model\SubsidyCategory;
use App\Model\SubsidySubCategory;
use Illuminate\Database\Eloquent\Model;

class ProjectAllocation extends Model
{
    public function getSubsidyCategoryAttribute(){
        return SubsidyCategory::find($this->subsidy_category_id);
    }
}
