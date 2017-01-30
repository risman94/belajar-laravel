<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table='contact';

    public $timestamps = false; //buat created_at updated_at gak ada

    //protected $fillable = []

    protected $guarded = []; //blacklist
}
