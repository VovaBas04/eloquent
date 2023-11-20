<?php

namespace Database\migrations;

use Database\migrations\schema\Cabinet;
use Database\migrations\schema\Lesson;
use Database\migrations\schema\Mark;
use Database\migrations\schema\Owner;
use Database\migrations\schema\Schedule;
use Database\migrations\schema\SchoolClass;
use Database\migrations\schema\Student;
use Database\migrations\schema\Subject;
use Database\migrations\schema\Teacher;

class CreateTables
{
    public static function up()
    {
        Teacher::create();
        SchoolClass::create();
        Student::create();
        Subject::create();
        Mark::create();
        Lesson::create();
        Cabinet::create();
        Owner::create();
        Schedule::create();
    }
}
