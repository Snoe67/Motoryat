@extends('layouts.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <div class="container">
        <div id="kategori-secimi" class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategori Seçimi</div>

                    <form name="ilan-ver-1" class="form-horizontal" role="form" method="post"
                          action="{{ route('ilan-ver-adim-2') }}">
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <label for="alt-kat-bilgisi" class="control-label">Kategori Seçiniz</label>
                            <select id="alt-kat-bilgisi" name="alt-kat-bilgisi" class="form-control"
                                    onchange="getMarkalar()">
                                <option id="alt-kat-sec" value="0">Kategorinizi seçiniz</option>
                                @foreach($altKategoriler as $altKategori)
                                    <option value="{{ $altKategori->alt_kategori_id }}">{{ $altKategori->alt_kategori_adi }}</option>
                                @endforeach
                            </select>
                            <label for="marka-bilgisi" class="control-label">Marka Seçiniz</label>
                            <select id="marka-bilgisi" name="marka-bilgisi" class="form-control"
                                    onchange="getModeller()"
                                    disabled="disabled">
                                <option id="marka-sec" value="0">Marka seçiniz</option>
                            </select>
                            <label for="model-bilgisi" class="control-label">Model Seçiniz</label>
                            <select id="model-bilgisi" name="model-bilgisi" class="form-control" disabled="disabled">
                                <option id="model-sec" value="0">Model seçiniz</option>
                            </select>
                            <button class="btn btn-primary pull-right" style="margin-top: 10px;" type="submit"
                                    name="kategori-secimi-tamamla" id="kategori-secimi-tamamla"
                                    disabled="disabled">
                                Seçimi
                                Tamamla
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getMarkalar() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            var tekrarBasla = document.getElementById("model-bilgisi");
            if (!tekrarBasla.disabled || tekrarBasla.value === "yok") {
                removeOptions(tekrarBasla);
                var tekrarIlkSecenek = document.createElement("option");
                tekrarIlkSecenek.value = "0";
                tekrarIlkSecenek.innerHTML = "Model Seçiniz";
                tekrarBasla.appendChild(tekrarIlkSecenek);
                tekrarBasla.disabled = true;
            }

            var firstt = document.getElementById("alt-kat-sec");
            if (firstt !== null)
                firstt.remove();

            var altKat = document.getElementById("alt-kat-bilgisi");
            var altKatID = altKat.options[altKat.selectedIndex].value;
            $.ajax({
                type: 'POST',
                url: '/api/ajax/markalar',
                data: {altKatID: altKatID, _token: CSRF_TOKEN},
                dataType: 'text',
                success: function (resultData) {
                    if (document.getElementById("marka-bilgisi").options.length > 1) {
                        removeOptions(document.getElementById("marka-bilgisi"));
                    }
                    var jsonData = JSON.parse(resultData);
                    if (jsonData.length !== 0) {
                        for (var i = 0; i < jsonData.length; i++) {
                            var opt = jsonData[i];
                            var newOpt = document.createElement("option");
                            newOpt.value = opt.marka_id;
                            newOpt.innerHTML = "" + opt.marka_adi;
                            document.getElementById("marka-bilgisi").appendChild(newOpt);
                        }
                        var first = document.getElementById("marka-sec");
                        if (first !== null)
                            first.remove();
                        document.getElementById("marka-bilgisi").disabled = false;

                        document.getElementById("kategori-secimi-tamamla").disabled = true;
                    } else {
                        var first = document.getElementById("marka-sec");
                        var newOpt = document.createElement("option");
                        newOpt.id = "marka-sec";
                        newOpt.value = "yok";
                        newOpt.innerHTML = "Seçilebilecek Marka Bulunmuyor";
                        removeOptions(document.getElementById("marka-bilgisi"));
                        document.getElementById("marka-bilgisi").appendChild(newOpt);
                        if (first !== null)
                            first.remove();
                        document.getElementById("marka-bilgisi").disabled = true;
                        var firstModel = document.getElementById("model-sec");
                        var newOptModel = document.createElement("option");
                        newOptModel.id = "model-sec";
                        newOptModel.value = "yok";
                        newOptModel.innerHTML = "Seçilebilecek Model Bulunmuyor";
                        removeOptions(document.getElementById("model-bilgisi"));
                        document.getElementById("model-bilgisi").appendChild(newOptModel);
                        if (firstModel !== null)
                            firstModel.remove();
                        document.getElementById("model-bilgisi").disabled = true;

                        document.getElementById("kategori-secimi-tamamla").disabled = false;
                    }

                }
            });
        }

        function getModeller() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            var first = document.getElementById("alt-kat-sec");
            if (first !== null)
                first.remove();

            var markaBilgi = document.getElementById("marka-bilgisi");
            var markaID = markaBilgi.options[markaBilgi.selectedIndex].value;
            $.ajax({
                type: 'POST',
                url: '/api/ajax/modeller',
                data: {markaID: markaID, _token: CSRF_TOKEN},
                dataType: 'text',
                success: function (resultData) {
                    if (document.getElementById("model-bilgisi").options.length > 0) {
                        removeOptions(document.getElementById("model-bilgisi"));
                    }
                    var jsonData = JSON.parse(resultData);
                    if (jsonData.length !== 0) {
                        for (var i = 0; i < jsonData.length; i++) {
                            var opt = jsonData[i];
                            var newOpt = document.createElement("option");
                            newOpt.value = opt.model_id;
                            newOpt.innerHTML = "" + opt.model_adi;
                            document.getElementById("model-bilgisi").appendChild(newOpt);
                        }
                        var firstM = document.getElementById("model-sec");
                        if (firstM !== null)
                            firstM.remove();
                        document.getElementById("model-bilgisi").disabled = false;

                        document.getElementById("kategori-secimi-tamamla").disabled = false;
                    } else {
                        var firstMN = document.getElementById("model-sec");
                        var newOpt = document.createElement("option");
                        newOpt.value = "yok";
                        newOpt.innerHTML = "Seçilebilecek Model Bulunmuyor";
                        document.getElementById("model-bilgisi").appendChild(newOpt);
                        if (firstMN !== null)
                            firstMN.remove();
                        document.getElementById("model-bilgisi").disabled = true;

                        document.getElementById("kategori-secimi-tamamla").disabled = false;
                    }

                }
            });
        }

        function removeOptions(selectbox) {
            var i;
            for (i = selectbox.options.length - 1; i >= 0; i--) {
                selectbox.remove(i);
            }
        }
    </script>
@endsection