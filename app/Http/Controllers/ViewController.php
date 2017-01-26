<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Home;
use App\Kategori;

class ViewController extends Controller
{
    //
	public function index()
    {
    	
    	$home = Home::all();
    	
    	return view('welcome',['home' => $home ]);
    }

    public function produk($id)
    {
    	$kategori = Kategori::find($id);

      	return view('produk', ['kategori' => $kategori ]);
    }
}
