@extends('layouts.app')

@push('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
@endpush
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
        @elseif($seciliData[0] == 3)
            @include('kategoriformlari.surat-teknesi-ilan-form')
        @elseif($seciliData[0] == 4)
            @include('kategoriformlari.bot-ilan-form')
        @elseif($seciliData[0] == 5)
            @include('kategoriformlari.jet-ski-ilan-form')
        @elseif($seciliData[0] == 6)
            @include('kategoriformlari.sandal-ilan-form')
        @elseif($seciliData[0] == 7)
            @include('kategoriformlari.gezi-teknesi-ilan-form')
        @elseif($seciliData[0] == 8)
            @include('kategoriformlari.gulet-ilan-form')
        @elseif($seciliData[0] == 9)
            @include('kategoriformlari.balikci-teknesi-ilan-form')
        @elseif($seciliData[0] == 10)
            @include('kategoriformlari.yolcu-gemisi-ilan-form')
        @elseif($seciliData[0] == 11)
            @include('kategoriformlari.tanker-ilan-form')
        @elseif($seciliData[0] == 12)
            @include('kategoriformlari.icten-distan-takma-motor-ilan-form')
        @endif
    </div>
@endsection