@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>halaman pemesanan !</p>
                    <hr>
                    
                    @foreach($pemesanan as $pemesanan)
                                <li>
                                    <a href="/home/pemesanan/{{$pemesanan->id}}">{{$pemesanan->nama}}</a>
                                </li>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection