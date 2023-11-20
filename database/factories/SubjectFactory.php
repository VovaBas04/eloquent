<?php

namespace Database\Factories;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
require_once 'vendor/autoload.php';
class SubjectFactory  extends FactoryRU
{
    public function definition()
    {
        $subjects =['Русский язык','Математика','Биология','Физика','Химия','История','Музыка','Хор','Информатика','География','Литература'];
        return [
            'title'=>$subjects[$this->faker->unique()->numberBetween(0,10)]
        ];
    }
}