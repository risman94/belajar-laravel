@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    halaman create !

                    <form action="/home" method="post" enctype="multipart/form-data"><br>
                        <input type="file" name="foto"><br>
                        <input type="text" name="title"><br>
                        <textarea name="description" rows="8" cols="40"></textarea><br>
                        <input type="number" name="price"><br>
                        <select name="name_kategori">
                            <option></option>
                            <option value="1">fashion</option>
                            <option value="2">elektronik</option>
                            <option value="3">olahraga</option>
                            <option value="4">musik</option>
                            <option value="5">properti</option>
                        </select><br>

                        <input type="submit" name="submit" value="create"><br>
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
