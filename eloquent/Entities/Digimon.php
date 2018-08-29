<?php

namespace ORM\Eloquent\Entities;

use Illuminate\Database\Eloquent\Model;

class Digimon extends Model
{
    protected $table = "digimons";
    public $timestamps = false;
}
