@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>halaman single !</p>
                    <hr>
                    
                    <h3> Nama : {{$pemesanan->nama}} </h3><hr>
                    <h3> Email : {{$pemesanan->email }} </h3><hr>
                    <h3> No.Hp : {{$pemesanan->tlpn}} </h3><hr>
                    <h3> Nama Barang : {{$pemesanan->nama_barang}} </h3><hr>
                    <h3> Keterangan : {{$pemesanan->keterangan}} </h3><hr>

                    <form action="/home/pemesanan/{{$pemesanan->id}}" method="post"><br>
                        <input type="submit" name="submit" value="delete"><br>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection