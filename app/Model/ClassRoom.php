<?php

namespace App\Model;

use App\Model\ClassLevel;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $fillable = [];
    protected $guarded = [];
  
  
    public function getClassLevelAttribute(){
        return ClassLevel::find($this->class_level_id);
    }
}
