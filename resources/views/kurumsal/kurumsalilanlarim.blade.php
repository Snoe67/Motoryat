@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ul class="nav nav-tabs">
                        <li><a href="{{ url('kurumsalhesabim/genel') }}">Genel Görünüm</a></li>
                        <li class="active"><a href="{{ url('hesabim/ilanlarim') }}">İlanlarım</a></li>
                        <li><a href="{{ url('kurumsalhesabim/favorilerim') }}">Favorilerim</a></li>
                        <li><a href="{{ url('kurumsalhesabim/mesajlarim') }}">Mesajlarım</a></li>
                        <li><a href="{{ url('kurumsalhesabim/magaza-duzenleme') }}">Mağaza Düzenleme</a></li>
                        <li><a href="{{ url('kurumsalhesabim/ayarlar') }}">Hesap Ayarları</a></li>
                    </ul>
                    <div class="panel-heading">Mağaza İlanları</div>

                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection