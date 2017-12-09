<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //protected $table = 'admins'; want to change table name, but default table is the plural name of the class
    protected $primaryKey = 'adminId';
    public $timestamps = false;
}
