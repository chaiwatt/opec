<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SchoolBankAccount extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    public function getSubsidyCategoryAttribute(){
        return SubsidyCategory::find($this->subsidy_categorie_id);
    }
}
