<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
require_once 'vendor/autoload.php';
class TeacherFactory  extends FactoryRU
{
    public function definition()
    {
        $gender = ['male','female'];
        $currentGender = $gender[$this->faker->numberBetween(0,1)];
        return [
            'name'=>$this->faker->firstName($currentGender),
            'surname'=>$this->faker->lastName($currentGender),
            'patronimic'=>$this->faker->middleName($currentGender)
        ];
    }
}