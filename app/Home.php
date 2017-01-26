<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Home extends Model
{
    //
    protected $table='produk';

    public $timestamps = false; //buat created_at updated_at gak ada

    //protected $fillable = []

    protected $guarded = []; //blacklist

    public function kategori() {
        return $this->belongsTo('App\Kategori', 'name_kategori');
    }
}
