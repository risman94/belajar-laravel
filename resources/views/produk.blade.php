@extends('layouts.master')

@section('isi')

<div class="container col-md-12 col-lg-12 col-sm-12">
	
    <div class="row">
        @foreach($kategori->home as $home)
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
</div>
@endsection  