@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    halaman edit !

                    <form action="/home/produk/{{$home->id}}" method="post" enctype="multipart/form-data"><br>
                        <input type="file" name="foto" value="{{$home->foto}}"><br>
                        <input type="text" name="title" value="{{$home->title}}"><br>
                        <textarea name="description" rows="8" cols="40"> {{$home->description}} </textarea><br>
                        <input type="number" name="price" value="{{$home->price}}"><br>
                        <select name="name_kategori" value="{{$home->name_kategori}}">
                            <option></option>
                            <option value="1">fashion</option>
                            <option value="2">elektronik</option>
                            <option value="3">olahraga</option>
                            <option value="4">musik</option>
                            <option value="5">properti</option>
                        </select><br>

                        <input type="submit" name="submit" value="edit"><br>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
