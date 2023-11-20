<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = [];
    protected $primaryKey = 'student_id';
    public function schoolClass(){
        return $this->hasOne(SchoolClass::class,'student_id');
    }
    public function marks(){
        return $this->hasMany(Mark::class,'mark_id');
    }
}