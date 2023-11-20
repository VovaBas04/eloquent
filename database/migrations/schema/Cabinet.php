<?php

namespace Database\migrations\schema;

use Database\migrations\Table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Cabinet implements Table
{
    public static function create()
    {
        Capsule::schema()->create('cabinets', function (Blueprint $table) {
            $table->increments('cabinet_id');
            $table->unsignedInteger('number');
        });
    }
}