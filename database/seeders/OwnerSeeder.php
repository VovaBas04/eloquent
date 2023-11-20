<?php

namespace Database\seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    public static function run(){
        Owner::factory()->count(10)->create();
    }
}