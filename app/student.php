<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model implements authenticable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table='students';
}
