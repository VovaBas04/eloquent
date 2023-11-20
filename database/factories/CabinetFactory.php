<?php

namespace Database\Factories;
require_once 'vendor/autoload.php';
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Faker\Factory as FakerFactory;
class CabinetFactory extends FactoryRU
{

    public function definition()
    {
        return [
            'number'=>$this->faker->numberBetween(1,50)
        ];
    }
}