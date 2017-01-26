@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>halaman single 1 !</p>
                    <hr>
                  
                    {{$kategori->name_kategori}} :
                    <br>

                    @foreach($kategori->home as $home)
                        <li>
                            <a href="/home/produk/{{$home->id}}">{{$home->title}}</a>

                        </li>
                    @endforeach
             
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
