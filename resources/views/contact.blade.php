@extends('layouts.master')

@section('isi')
<div class="container col-md-12 col-lg-12 col-sm-12 c-contact">
    <div class="row">
        <div class=" col-md-1"></div>
        <div class=" col-md-10">
            <h2 class="judul-contact">Contact us</h2>
            <form action="/" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama</label>
                    <div class="col-md-8">
                        <input name="nama" type="text" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-8">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Pesan</label>
                    <div class="col-md-8">
                        <textarea name="pesan" class="form-control" rows="3" placeholder="tuliskan pesan anda . . ."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-primary" type="submit" name="submit" value="kirim">
                        {{ csrf_field() }}
                    </div>
                </div>
            </form>
        </div>
        <div class=" col-md-1"></div>
    </div>
</div>
@endsection      