<?php

namespace App\controllers;

use App\Models\Schedule;
use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Builder;

class SolveController
{
    public function getSubjectByClass(int $classNumber, string $paralel, string $day, int $numberLesson)
    {
        return Schedule::with('lesson','lesson.subject','schoolClass')
            ->whereHas('schoolClass',function (Builder $builder) use ($classNumber,$paralel){
                $builder->where('number',$classNumber)->where('paralel',$paralel);
            })
            ->where('day',$day)
            ->where('number_lesson',$numberLesson)
            ->first()
            ->lesson
            ->subject
            ->title;
//        Schedule::with('lesson','lesson.subject','schoolClass')
//        foreach ($schedules as $schedule){
//            if ($schedule->day===$day and $schedule->schoolClass->paralel===$paralel and $schedule->schoolClass->number===$numberLesson)
//                return $schedule->lesson->subject->title;
//        }
    }

    public function getTeachersByClass(int $classNumber, string $paralel)
    {
        return Teacher::whereHas('lessons.schedules.schoolClass',function (Builder $builder) use ($classNumber,$paralel){
            $builder->where('number',$classNumber)->where('paralel',$paralel);
        })->get()->map(function ($item){return $item->name .' ' . $item->surname . ' ' . $item->patronimic;});
    }
    public function getCabinetByClass(int $classNumber, string $paralel,int $number=5,$day='Среда'){
//        return Schedule::with('cabinet','schoolClass')->get()->where('schoolClass.number',$classNumber)
//            ->where('schoolClass.paralel',$paralel)->where('number_lesson',$number)->where('day',$day)->first()->cabinet->number;
          return Schedule::with('cabinet','schoolClass')->whereHas('schoolClass',function (Builder $builder) use ($paralel,$classNumber){
              $builder->where('paralel',$paralel)->where('number',$classNumber);
          })->where('day',$day)->where('number_lesson',$number)->first()->cabinet->number;
    }
    public function getClassBySubject(string $subject,string $name,string $surname,string $patronimic){
        return Schedule::with('schoolClass','lesson','lesson.subject','lesson.teacher')
            ->whereHas('lesson.subject',function (Builder $builder) use ($subject){
                $builder->where('title',$subject);
            })
            ->whereHas('lesson.teacher',function (Builder $builder) use ($name,$surname,$patronimic){
               $builder
                   ->where('name',$name)
                   ->where('surname',$surname)
                   ->where('patronimic',$patronimic);
            })
            ->get()->map(function ($item){return $item->schoolClass->number . $item->schoolClass->paralel;});
    }
    public function getScheduleByClass(int $classNumber, string $paralel,string $day){
          return Schedule::with('schoolClass','lesson','lesson.subject')->where('day',$day)
              ->whereHas('schoolClass',function (Builder $builder) use ($paralel,$classNumber){
                  $builder->where('paralel',$paralel)->where('number',$classNumber);
              })->get()->map(function ($item){return $item->day . ' ' . $item->number_lesson . ' ' . ' ' .$item->cabinet->number . ' ' . $item->lesson->subject->title;});
    }
    public function getStudentsByClass(int $classNumber, string $paralel){
        return SchoolClass::where('paralel', $paralel)
            ->where('number', $classNumber)
            ->withCount('students')->first()->students_count;
    }

}