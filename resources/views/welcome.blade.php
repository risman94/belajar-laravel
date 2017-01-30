@extends('layouts.master')

@section('isi')
      
<!--div class="container col-md-12 col-lg-12 col-sm-12">
    <div class="row">
        @foreach($home as $home)
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="/fotos/{{ $home->foto }}" alt="...">
                <div class="caption">
                    <h3>{{ $home->title }}</h3>
                    <p> Rp. {{$home->price}}</p>
                    <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div-->

<div class="container col-md-12 col-lg-12 col-sm-12">
    <div class="row c-wlcm">
        <h2><center>Categories</center></h2><br><br>
        <div class=" col-md-1"></div>
        @foreach($kategori as $kat)
        <div class="col-sm-6 col-md-2">
            <a href="/kategori/{{$kat->id}}" class="thumbnail t-kategori">
                <h4>{{$kat->name_kategori}}</h4>
            </a>
        </div>
        @endforeach
        <div class=" col-md-1"></div>
    </div>
</div>
@endsection      

        
        
