<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linkinpark extends Model
{
    // want to change table name, but default table is the plural name of the class
    protected $table = 'bandconcerts';
    protected $primaryKey = 'adminId';
    public $timestamps = false;
}
