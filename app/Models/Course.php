<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function trainor(){
        return $this->belongsTo(Trainor::class);
    }
    public function getTrainorUserNameAttribute(){
        return $this->trainor->user->full_name;
    }
    public function trainees(){
        return $this->hasMany(Trainee::class);
    }
}
