<?php

namespace Database\migrations\schema;


use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Mark implements Table
{
    public static function create()
    {
        Capsule::schema()->create('marks', function (Blueprint $table) {
            $table->increments('mark_id');
            $table->unsignedInteger('mark');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('subject_id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
        });
    }
}