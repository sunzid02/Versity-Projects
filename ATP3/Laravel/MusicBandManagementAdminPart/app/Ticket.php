<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //protected $table = 'bank_users';
	protected $primaryKey = 'TicketId';
	public $timestamps = false;
}
