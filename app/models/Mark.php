<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'mark_id';
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
}