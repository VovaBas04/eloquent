<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

abstract class FactoryRU extends Factory
{
    public function withFaker(){
        return FakerFactory::create('ru_RU');
    }
    public abstract function definition();
}