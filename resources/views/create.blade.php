@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    halaman create !

                    <form action="/home" method="post" enctype="multipart/form-data" class="form-horizontal"><br>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Gambar</label>
                            <div class="col-md-8">
                                <input type="file" name="foto"><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Title</label>
                            <div class="col-md-8">
                                <input name="title" type="text" class="form-control" placeholder="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" rows="3" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Price</label>
                            <div class="col-md-8">
                                <input name="price" type="number" class="form-control" placeholder="price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Kategori</label>
                            <div class="col-md-8">
                                <select name="name_kategori" class="form-control">
                                    <option></option>
                                    <option value="1">fashion</option>
                                    <option value="2">elektronik</option>
                                    <option value="3">olahraga</option>
                                    <option value="4">musik</option>
                                    <option value="5">properti</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" name="submit" value="create"><br>
                                {{ csrf_field() }}
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
