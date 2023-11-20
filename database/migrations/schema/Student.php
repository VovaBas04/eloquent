<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Student implements Table
{
    public static function create()
    {
        Capsule::schema()->create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('name',64);
            $table->string('surname',64);
            $table->string('patronimic',64);
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('class_id')->on('classes')->onDelete('cascade');
        });
    }
}