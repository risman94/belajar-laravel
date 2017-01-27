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
<<<<<<< HEAD
        $kategori = Kategori::all();
=======
	$kategori = Kategori::all();
>>>>>>> 3347637d9a6288dd8524a9a0a7f17ec97b04549d
    	
    	return view('welcome',['home' => $home , 'kategori' => $kategori]);
    }

    public function produk($id)
    {
    	$kategori = Kategori::find($id);
        $home = $kategori->home;
        
        return view('produk', ['kategori' => [ $kategori ],'home' => $home,]);

      	//return view('produk', ['kategori' => $kategori ]);
    }
}
