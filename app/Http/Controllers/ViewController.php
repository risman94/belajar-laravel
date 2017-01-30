<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Home;
use App\Kategori;
use App\Pemesanans;
use App\Contact;

class ViewController extends Controller
{
    //
	public function index()
    {
    	
    	$home = Home::all();
        $kategori = Kategori::all();
    	
    	return view('welcome',['home' => $home , 'kategori' => $kategori]);
    }

    public function produk($id)
    {
    	$kategori = Kategori::find($id);
        //$home = $kategori->home;
        
        return view('produk', ['kategori' =>  $kategori ]);
    }

    public function produkid($id)
    {
        $home = Home::find($id);
        
        return view('produkid', ['home' =>  $home ]);
    }

    public function pemesanancreate()
    {
        return view('pesan');
    }

    public function contactcreate()
    {
        return view('contact');
    }

    public function pemesananstore(Request $request)
    {

        $pemesanan = new Pemesanans;
        $pemesanan->nama = $request->nama;
        $pemesanan->email = $request->email;
        $pemesanan->tlpn = $request->tlpn;
        $pemesanan->nama_barang = $request->nama_barang;
        $pemesanan->keterangan = $request->keterangan;
        $pemesanan->save();

        return redirect('/pemesanan'); 
    }

    public function contactstore(Request $request)
    {

        $contact = new Contact;
        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->pesan = $request->pesan;
        $contact->save();

        return redirect('/'); 
    }

    public function about()
    {
        return view('about');
    }
}
