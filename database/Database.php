<?php
namespace Database;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database {
    private $capsule;
    function __construct()
    {
        $this->capsule = new Capsule;
        $this->capsule->addConnection([
            "driver" => DBDRIVER,
            "host" => DBHOST,
            "database" => DBNAME,
            "username" => DBUSER,
            "password" => DBPASS,
            "charset" => "utf8",
            "collation" => "utf8_unicode_ci",
            "prefix" => "",
        ]);
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }
}