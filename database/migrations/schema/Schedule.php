<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Schedule implements Table
{
    public static function create()
    {
        Capsule::schema()->create('schedules', function (Blueprint $table) {
            $table->increments('schedule_id');
            $table->string('day',32);
            $table->unsignedInteger('number_lesson');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('cabinet_id');
            $table->foreign('lesson_id')->references('lesson_id')->on('lessons')->onDelete('cascade');
            $table->foreign('class_id')->references('class_id')->on('classes')->onDelete('cascade');
            $table->foreign('cabinet_id')->references('cabinet_id')->on('cabinets')->onDelete('cascade');
        });
    }
}