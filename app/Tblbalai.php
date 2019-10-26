<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblbalai extends Model
{
    protected $table = 'tblbalai';
    public $timestamps = false;
    

    public function paket()
    {
        return $this->hasMany(Paket::class,'kdsatker','kdsatker');
    }
}
