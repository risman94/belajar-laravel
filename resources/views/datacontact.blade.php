@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>halaman data contact us !</p>
                    <hr>
                    
                    @foreach($contact as $contact)
                                <li>
                                    <a href="/home/contact/{{$contact->id}}">{{$contact->nama}}</a>
                                </li>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection