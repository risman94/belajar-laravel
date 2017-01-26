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
                    
                    @foreach($kategori as $kategori)
                        <li>
                            <a href="/home/{{$kategori->id}}">{{$kategori->name_kategori}}</a>
                        </li>
                    @endforeach
                    <a class="btn btn-default" href="/home/create" role="button">create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
