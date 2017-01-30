@extends('layouts.master')

@section('isi')

<div class="container col-md-12 col-lg-12 col-sm-12 c-idproduk">
    <div class="row">
        <div class=" col-md-1"></div>
        <div class=" col-md-10">
        	<img src="/fotos/{{ $home->foto }}" class="img-idproduk">
            <h4> Title : {{$home->title}} </h4><hr>
            <h4> Description : {{ $home->description }} </h4><hr>
            <h4> Price : {{$home->price}} </h4><hr>
            <h4> Kategori : {{$home->kategori->name_kategori}} </h4><hr>
            <p><a href="/kategori/{{$home->kategori->id}}" class="btn btn-warning" role="button"> Back </a> <a href="/pemesanan" class="btn btn-success" role="button"> Pesan </a></p>
        </div>
        <div class=" col-md-1"></div>
    </div>
</div>

@endsection 