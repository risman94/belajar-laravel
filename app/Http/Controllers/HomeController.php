<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Home;
use App\Kategori;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$homes = Home::all();

      //return view('home',['homes' => $homes]);
      $kategori = Kategori::all();

      return view('home', ['kategori' => $kategori]);
    }

    public function show1($id)
    {
      //$home = Home::find($id);

      //if(!$home)
        //abort(404);

      //return view('single', ['home' => $home]);
      $kategori = Kategori::find($id);

      return view('single1', ['kategori' => $kategori]);
    }

    public function show($id) //hapus jika rusak
    {
      $home = Home::find($id);

      return view('single', ['home' => $home]);
    }

    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
      
      

      $home = new Home;
      $file = $request->file('foto');
      $fileName = $file->getClientOriginalName();
      $request->file('foto')->move("fotos/", $fileName);
      $home->foto = $fileName;
      $home->title = $request->title;
      $home->description = $request->description;
      $home->price = $request->price;
      $home->name_kategori = $request->name_kategori;
      $home->save();


       
      return redirect('home'); 
    }

    public function edit($id)
    {
      $home = Home::find($id);

      return view('edit', ['home' => $home]);
    }

    public function update(Request $request, $id)
    {
      $home = Home::find($id);
      $file = $request->file('foto');
      $fileName = $file->getClientOriginalName();
      $request->file('foto')->move("fotos/", $fileName);
      $home->foto = $fileName;
      $home->title = $request->title;
      $home->description = $request->description;
      $home->price = $request->price;
      $home->name_kategori = $request->name_kategori;
      $home->save();

      return redirect('/home/produk/' . $id);

    }

    public function destroy($id)
    {
      $home = Home::find($id);
      $home->delete();

      return redirect('home');
    }
}
