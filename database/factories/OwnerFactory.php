<?php

namespace Database\Factories;
use App\Models\Teacher;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cabinet;
use Illuminate\Support\Collection;
require_once 'vendor/autoload.php';
class OwnerFactory  extends FactoryRU
{
    public function definition()
    {
        return [
            'cabinet_id'=>Cabinet::factory(),
            'teacher_id'=>Teacher::factory()
        ];
    }
}