<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'owner_id';
    public function cabinet(){
        return $this->belongsTo(Cabinet::class,'cabinet_id');
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
}