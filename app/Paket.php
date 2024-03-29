<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table='paket';
    protected $fillable = [
        'kdsatker', 'nmpaket', 'pagurmp', 'trgoutput', 'satoutput', 'trgoutcome', 'satoutcome','kdoutput','TahunFisik','pagurmawal'
    ];

    public function tblbalai()
    {
        return $this->belongsTo(Tblbalai::class,'kdsatker','kdsatker');
    }

    public function tblsatoutput()
    {
        return $this->hasOne(Tblsatoutput::class,'satoutput','satoutput');
    }

    public function paket7()
    {
        return $this->hasOne(Paket7::class);
    }

    public function tblkdoutput()
    {
        return $this->hasOne(Tblkdoutput::class,'kdoutput','kdoutput');
    }

    public function tblcatatan()
    {
        return $this->hasMany(Tblcatatan::class);
    }
}
