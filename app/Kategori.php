<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table='kategori';

    public $timestamps = false; //buat created_at updated_at gak ada

    protected $guarded = []; //blacklist

    public function home()
    {
        return $this->hasMany('App\Home', 'name_kategori');
    }
}
