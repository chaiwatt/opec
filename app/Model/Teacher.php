<?php

namespace App\Model;

use App\User;
use App\Model\TeacherPosition;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    public function getUserAttribute(){
        return User::find($this->user_id);
    }
    public function getTeacherPositionAttribute(){
        return TeacherPosition::find($this->teacher_position_id);
    }
}
