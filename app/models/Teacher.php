<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'teacher_id';
    public function owner(){
        return $this->hasOne(Owner::class,'teacher_id');
    }
    public function lessons(){
        return $this->hasMany(Lesson::class,'teacher_id');
    }
}