<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class SchoolClass implements Table
{
    public static function create()
    {
        Capsule::schema()->create('classes', function (Blueprint $table) {
            $table->increments('class_id');
            $table->unsignedInteger('number');
            $table->string('paralel',2);
        });
    }
}