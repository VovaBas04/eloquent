<?php

namespace Database\seeders;

use database\migrations\schema\Lesson;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    public static function run(){
        MarkSeeder::run();
        OwnerSeeder::run();
        LessonSeeder::run();
        ScheduleSeeder::run();
    }
}