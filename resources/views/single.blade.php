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
                    <img src="/fotos/{{ $home->foto }}"><hr>
                    <h3> Title : {{$home->title}} </h3><hr>
                    <h3> Description : {{ $home->description }} </h3><hr>
                    <h3> Price : {{$home->price}} </h3><hr>
                    <h3> Kategori : {{$home->kategori->name_kategori}} </h3><hr>

                    <a class="btn btn-default" href="/home/{{$home->id}}/edit" role="button">edit</a>

                    <form action="/home/{{$home->id}}" method="post"><br>
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
