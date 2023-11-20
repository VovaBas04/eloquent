<?php
require "config.php";
require "vendor/autoload.php";
use App\controllers\SolveController;
use Database\Database;
use Database\seeders\MainSeeder;
use Database\migrations\CreateTables;
$dt = new Database();
//CreateTables::up();
//MainSeeder::run();
$solve = new SolveController();
dump($solve->getSubjectByClass(9,'в',"Вторник",4));
dump($solve->getTeachersByClass(7,'б'));
dump($solve->getCabinetByClass(11,'б'));
dump($solve->getClassBySubject('Русский язык','Святослав','Мишин','Борисович'));
dump($solve->getScheduleByClass(8,'в','Понедельник'));
dump($solve->getStudentsByClass(1,'а'));