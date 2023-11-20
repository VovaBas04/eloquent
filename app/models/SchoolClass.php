<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'class_id';
    protected $table = 'classes';
    public function students(){
        return $this->hasMany(Student::class,'class_id');
    }
    public function schedules(){
        return $this->hasMany(Schedule::class,'class_id');
    }
}