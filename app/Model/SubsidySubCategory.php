<?php

namespace App\Model;

use App\Model\SubsidyCategory;
use Illuminate\Database\Eloquent\Model;

class SubsidySubCategory extends Model
{
    public function getSubsidyCategoryAttribute(){
        return SubsidyCategory::find($this->subsidy_categorie_id);
    }
}
