@extends('layouts.master')

@section('isi')
<div class="container col-md-12 col-lg-12 col-sm-12 c-pesan">
    <div class="row">
        <div class=" col-md-1"></div>
        <div class=" col-md-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Cara Pemesanan :</h4>
                    <ul>
                        <li>isi data lengkap anda pada form yang telah kami sediakan</li>
                        <li>selanjutnya kami akan menghubungi anda kembali melalui nomer atau email anda</li>
                        <li>kami akan menghubungi anda paling lambat 1 x 24 jam</li>
                    </ul>
                </div>
            </div>
            <form action="/pemesanan" method="post" class="form-horizontal">
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
                    <label class="col-md-2 control-label">No. Hp</label>
                    <div class="col-md-8">
                        <input name="tlpn" type="number" class="form-control" placeholder="Nomor hp">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama Barang</label>
                    <div class="col-md-8">
                        <input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Keterangan</label>
                    <div class="col-md-8">
                        <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan tambahan..."></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-success" type="submit" name="submit" value="pesan">
                        {{ csrf_field() }}
                    </div>
                </div>
            </form>
        </div>
        <div class=" col-md-1"></div>
    </div>
</div>
@endsection      