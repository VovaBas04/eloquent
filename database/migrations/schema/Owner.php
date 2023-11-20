<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Owner implements Table
{
    public static function create()
    {
        Capsule::schema()->create('owners', function (Blueprint $table) {
            $table->increments('owner_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('cabinet_id');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->onDelete('cascade');
            $table->foreign('cabinet_id')->references('cabinet_id')->on('cabinets')->onDelete('cascade');
        });
    }
}