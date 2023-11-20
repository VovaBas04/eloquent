<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'schedule_id';
    public function lesson(){
        return $this->belongsTo(Lesson::class,'lesson_id');
    }
    public function schoolClass(){
        return $this->belongsTo(SchoolClass::class,'class_id');
    }
    public function cabinet(){
        return $this->belongsTo(Cabinet::class,'cabinet_id');
    }
}