<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanans extends Model
{
    //
     protected $table='pemesanan';

    public $timestamps = false; //buat created_at updated_at gak ada

    //protected $fillable = []

    protected $guarded = []; //blacklist
}
