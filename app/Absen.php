<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    //
    public $timestamps = false;

    public function pegawai()
    {
    	return $this->belongsTo('App\Pegawai');
    }
}
