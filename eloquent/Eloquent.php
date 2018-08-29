<?php

namespace ORM\Eloquent;

use Illuminate\Database\Capsule\Manager;

class Eloquent
{
    public function __construct()
    {
        $capsule = new Manager();
        $capsule->addConnection([
            'driver' => 'pgsql',
            'host' => 'postgres',
            'database' => 'digimon_chart',
            'username' => 'root',
            'password' => 'q1w2e3',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        // Setup the Eloquent ORM… 
        $capsule->bootEloquent();
    }
}
