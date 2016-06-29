<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
	public $table = "absen";
    protected $fillable = array(
	'nrp',
	'nama',
	'kemeja',
	'dasi',
	'sabuk',
	'kaos',
	'rambut',
	'idcard',
	'waktu',
	'tanggal'

    	);
}
