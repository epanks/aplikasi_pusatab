<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblcatatan extends Model
{
    protected $table = 'tblcatatan';
    //public $timestamps = false;
    protected $fillable = [
        'nmcatatan', 'tindaklanjut','keterangan','paket_id','created_at','updated_at'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
