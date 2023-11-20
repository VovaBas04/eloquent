<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'cabinet_id';
    public function owner(){
        return $this->hasOne(Owner::class,'cabinet_id');
    }
    public function schedules(){
        return $this->hasMany(Schedule::class,'cabinet_id');
    }

}