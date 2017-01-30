@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <li><a href="home/pemesanan">Pemesanan</a></li>
                            <li><a href="home/contact">Contact</a></li>
                        </div>
                        <div class="row">
                            <h3>create produk</h3>
                            @foreach($kategori as $kategori)
                                <li>
                                    <a href="/home/{{$kategori->id}}">{{$kategori->name_kategori}}</a>
                                </li>
                            @endforeach
                        </div>
                    </div>
                    <a class="btn btn-default" href="/home/create" role="button">create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
