<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Subject extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'subject_id';
    public function lessons(){
        return $this->hasMany(Lesson::class,'subject_id');
    }
    public function marks(){
        return $this->hasMany(Mark::class,'subject_id');
    }
}