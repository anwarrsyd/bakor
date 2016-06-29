<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class izin extends Model
{
	public $table = "izin";
    protected $fillable = array(
	'nrp',
	'nama',
	'jamkeluar',
	'jamkembali',
	'alasan',
	'tanggal'
	

    	);
}
