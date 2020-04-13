<?php

namespace App\Model;

use App\Model\YearBudget;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = [];
  protected $guarded = [];

  protected $appends = ['yearbudget']; 

  public function getYearBudgetAttribute(){
    return YearBudget::find($this->year_budget_id);
  }
  
}
