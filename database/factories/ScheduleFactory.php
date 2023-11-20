<?php

namespace Database\Factories;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cabinet;
use App\Models\Lesson;
use App\Models\SchoolClass;
use Illuminate\Support\Collection;
require_once 'vendor/autoload.php';
class ScheduleFactory  extends FactoryRU
{
    public function definition()
    {
        return [
            'day'=>$this->faker->dayOfWeek,
            'number_lesson'=>$this->faker->numberBetween(1,7),
            'lesson_id'=>Lesson::factory(),
            'class_id'=>SchoolClass::factory(),
            'cabinet_id'=>Cabinet::factory()
        ];
    }
}