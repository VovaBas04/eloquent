<?php

namespace Database\seeders;

use App\Models\Lesson;
use App\Models\Owner;
use App\Models\SchoolClass;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public static function run(){
       $teachers = Teacher::all();
       $countTeachers = $teachers->count();
       $subjects = Subject::all();
       foreach ($subjects as $subject){
           $numberTeacher = collect(range(0,$countTeachers-1))->shuffle();
           $rand_number = rand(1,4);
           for ($i=0;$i<$rand_number;$i++){
               Lesson::factory()->create([
                   'subject_id'=>$subject->subject_id,
                   'teacher_id'=>$teachers[$numberTeacher[$i]]->teacher_id
               ]);
           }
       }
    }
}