<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /* table names are the plural of the class.
    Here our table name is users. But u can modify.

    protected $table = 'bank_users';

    So now table name will be 'bank_users' instead of User

    And in every table 'id' is the defaut primary key. If u want to change...
    protected $primaryKey = 'userId';
    */

    public $timestamps = false;
    protected $primaryKey= 'userId';

}
