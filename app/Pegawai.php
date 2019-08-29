<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function absens()
    {
        return $this->hasMany('App\Absen');
    }
}
