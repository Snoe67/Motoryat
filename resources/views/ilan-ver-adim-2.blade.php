@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Anasayfa</div>

                    <div class="panel-body">
                        @for($i = 0; $i<count($seciliData); $i++)
                            {{ $seciliData[$i] }}
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        @if($seciliData[0] == 1)
            @include('kategoriformlari.motoryat-ilan-form')
        @elseif($seciliData[0] == 2)
            @include('kategoriformlari.yelkenli-ilan-form')
        @endif
    </div>
@endsection