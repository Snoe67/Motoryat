@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ul class="nav nav-tabs">
                        <li  class="active"><a href="{{ url('hesabim/genel') }}">Genel Görünüm</a></li>
                        <li><a href="{{ url('hesabim/ilanlarim') }}">İlanlarım</a></li>
                        <li><a href="{{ url('hesabim/favorilerim') }}">Favorilerim</a></li>
                        <li><a href="{{ url('hesabim/mesajlarim') }}">Mesajlarım</a></li>
                        <li><a href="{{ url('hesabim/ayarlar') }}">Hesap Ayarları</a></li>
                    </ul>
                    <div class="panel-heading">Hesabım</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection