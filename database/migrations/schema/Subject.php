<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Subject implements Table
{
    public static function create()
    {
        Capsule::schema()->create('subjects', function (Blueprint $table) {
            $table->increments('subject_id');
            $table->string('title',64)->unique();
        });
    }
}