<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'lesson_id';
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function schedules(){
        return $this->hasMany(Schedule::class,'lesson_id');
    }
}