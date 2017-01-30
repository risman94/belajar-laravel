@extends('layouts.master')
@section('isi')
<div class="container col-md-12 col-lg-12 col-sm-12 c-produk">
    <center><h2>{{$kategori->name_kategori}}</h2></center><br><br> 
    <div class="row">
        @foreach($kategori->home as $home)
        <div class="col-sm-6 col-md-3">
            <a href="/kategori/produk/{{$home->id}}" class="thumbnail">
                <img src="/fotos/{{ $home->foto }}" alt="..." class="img-produk">
                <div class="caption">
                    <h4><center>{{ $home->title }}</center></h4>
                    <p><center> Rp. {{$home->price}}</center></p>
                    <!--p><a href="/kategori/produk/{{$home->id}}" class="btn btn-primary" role="button">Detail</a></p-->
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <p class="back"><a href="/" class="btn btn-warning" role="button"> Back to home</a></p>
</div>
@endsection  