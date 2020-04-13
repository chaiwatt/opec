<?php

namespace App\Model;

use App\Model\Prefix;
use App\Model\ClassRoom;
use App\Model\ClassLevel;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    public function getPrefixAttribute(){
        return Prefix::find($this->prefix_id);
    }
    public function getClassLevelAttribute(){
        return ClassLevel::find($this->class_level_id);
    }
    public function getClassRoomAttribute(){
        return ClassRoom::find($this->class_room_id);
    }
}
