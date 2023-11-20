<?php

namespace Database\Factories;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
require_once 'vendor/autoload.php';
class SchoolClassFactory  extends FactoryRU
{
    public function definition()
    {
        $paralel = ['а','б','в'];
        return [
            'number'=>$this->faker->unique()->numberBetween(1,11),
            'paralel'=>$paralel[$this->faker->numberBetween(0,2)]
        ];
    }
}