<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
	public $table = "admin";
    protected $fillable = array(
	'username',
	'email'

	

    	);
}
