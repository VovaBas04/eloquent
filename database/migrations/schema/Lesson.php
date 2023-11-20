<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Lesson implements Table
{
    public static function create()
    {
        Capsule::schema()->create('lessons', function (Blueprint $table) {
            $table->increments('lesson_id');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('subject_id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->onDelete('cascade');
        });
    }
}