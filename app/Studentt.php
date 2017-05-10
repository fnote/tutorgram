<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentt extends Model
{
    use \Illuminate\Auth\Authenticatable;

    protected $table='studentts';
}
