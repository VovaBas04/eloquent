<?php

namespace Database\seeders;

use App\Models\Lesson;
use App\Models\Cabinet;
use App\Models\SchoolClass;
use App\Models\Schedule;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public  static function run(){
        $lessons = Lesson::with('teacher','teacher.owner')->get();
        $cabinets = Cabinet::all();
        $classes = SchoolClass::all();
        $week = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
        foreach ($week as $day)
            for ($number=1;$number<7;$number++){
                $lessons = $lessons->shuffle();
                $index = 0;
                foreach ($classes as $schoolClass) {
                    $lesson = $lessons[$index++];
                    if ($lesson->teacher->owner)
                        $cabinet = $lesson->teacher->owner->cabinet_id;
                    else
                        $cabinet = $cabinets->random()->cabinet_id;
                    Schedule::factory()->create([
                        'class_id' => $schoolClass->class_id,
                        'number_lesson' => $number,
                        'day' => $day,
                        'lesson_id' => $lesson,
                        'cabinet_id' => $cabinet
                    ]);
                }
        }
    }
}