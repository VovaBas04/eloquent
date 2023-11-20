<?php

namespace Database\seeders;

use App\Models\Student;
use App\Models\SchoolClass;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Mark;
class MarkSeeder extends Seeder
{
    public static function run(){
        $subjects = Subject::factory(10)->create();
        SchoolClass::factory()->count(10)->has(Student::factory()->count(30))->create();
        $classes = SchoolClass::with('students')->get();
        $students = $classes->map(function ($schoolClass){return $schoolClass->students;})->collapse();
        foreach ($students as $student)
            foreach ($subjects as $subject)
                Mark::factory()->create([
                    'subject_id'=>$subject->subject_id,
                    'student_id'=>$student->student_id
                ]);
    }
}