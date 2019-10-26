<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblkdoutput extends Model
{
    protected $table = 'tblkdoutput';
    public $timestamps = false;
    
    public function paket()
    {
        return $this->hasMany(Paket::class,'kdoutput','kdoutput');
    }
}
