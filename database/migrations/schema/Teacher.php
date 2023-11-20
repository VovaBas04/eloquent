<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Teacher implements Table
{
    public static function create()
    {
        Capsule::schema()->create('teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('name',64);
            $table->string('surname',64);
            $table->string('patronimic',64);
        });
    }
}