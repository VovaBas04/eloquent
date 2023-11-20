<?php

namespace Database\Factories;
use Couchbase\BaseException;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Support\Collection;
require_once 'vendor/autoload.php';
class MarkFactory  extends FactoryRU
{

    public function definition()
    {
        return [
            'mark'=>$this->faker->numberBetween(2,5)
        ];
    }
}