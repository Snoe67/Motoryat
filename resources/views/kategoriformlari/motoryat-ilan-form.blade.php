<div id="ilan-detaylari" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">İlan Detayları</div>

            <div class="panel-body">
                <div class="form-group">
                    <label for="ilan-basligi" class="control-label">İlan Başlığı</label>
                    <input type="text" class="form-control" name="ilan-basligi" id="ilan-basligi"/>
                </div>
                <div class="form-group">

                    <label for="ilan-tekne-aciklama" class="control-label">Açıklama</label>
                    <textarea id="ilan-tekne-aciklama" name="ilan-tekne-aciklama"></textarea>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-yil" class="control-label">Yıl</label>
                            <input type="text" class="form-control" name="ilan-tekne-yil"
                                   id="ilan-tekne-yil"
                                   maxlength="4"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-fiyat" class="control-label">Fiyat</label>
                            <input type="number" class="form-control" name="ilan-tekne-fiyat"
                                   id="ilan-tekne-fiyat"/>
                        </div>
                        <div class="col-md-3">
                            <label for="para-birimi-secimi" class="control-label">Para Birimi</label>
                            <select id="para-birimi-secimi" name="para-birimi-secimi" class="form-control">
                                @foreach($formSecenekDatalari['paraBirimleri'] as $paraBirimi)
                                    <option value="{{ $paraBirimi->para_birimi_id }}">{{ $paraBirimi->para_birimi_adi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-durumu" class="control-label">Durumu</label>
                            <select id="ilan-durumu" name="ilan-durumu" class="form-control">
                                @foreach($formSecenekDatalari['ilanDurumlari'] as $ilanDurumu)
                                    <option value="{{ $ilanDurumu->durum_id }}">{{ $ilanDurumu->durum_adi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-takasli" class="control-label">Takaslı</label>
                            <select id="ilan-takasli" name="ilan-takasli" class="form-control">
                                <option value="1">Evet</option>
                                <option value="0">Hayır</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-motor-markasi" class="control-label">Motor Markası</label>
                            <select id="ilan-tekne-motor-markasi" name="ilan-tekne-motor-markasi" class="form-control">
                                @foreach($formSecenekDatalari['motorMarkalari'] as $motorMarkasi)
                                    <option value="{{ $motorMarkasi->motor_id }}">{{ $motorMarkasi->motor_adi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-motor-adedi" class="control-label">Motor Adedi</label>
                            <select id="ilan-tekne-motor-adedi" name="ilan-tekne-motor-adedi" class="form-control">
                                <option value="0">Motorsuz</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5 ve üzeri</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-motor-gucu" class="control-label">Motor Gücü (HP)</label>
                            <input type="text" class="form-control" name="ilan-tekne-motor-gucu"
                                   id="ilan-tekne-motor-gucu"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-yakit-tipi" class="control-label">Yakıt Tipi</label>
                            <select id="ilan-tekne-yakit-tipi" name="ilan-tekne-yakit-tipi" class="form-control">
                                @foreach($formSecenekDatalari['yakitTipleri'] as $yakitTipi)
                                    <option value="{{ $yakitTipi->yakit_id }}">{{ $yakitTipi->yakit_adi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-calisma-saati" class="control-label">Çalışma Saati</label>
                            <input type="text" class="form-control" name="ilan-tekne-calisma-saati"
                                   id="ilan-tekne-calisma-saati"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-govde-tipi" class="control-label">Gövde Tipi</label>
                            <select id="ilan-tekne-govde-tipi" name="ilan-tekne-govde-tipi" class="form-control">
                                @foreach($formSecenekDatalari['govdeTipleri'] as $govdeTipi)
                                    <option value="{{ $govdeTipi->govde_id }}">{{ $govdeTipi->govde_adi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-boy" class="control-label">Boy (Metre)</label>
                            <input type="text" class="form-control" name="ilan-tekne-boy"
                                   id="ilan-tekne-boy"/>
                        </div>
                        <div class="col-md-3">
                            <label for="ilan-tekne-en" class="control-label">En (Metre)</label>
                            <input type="text" class="form-control" name="ilan-tekne-en"
                                   id="ilan-tekne-en"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-kamara-sayisi" class="control-label">Kamara Sayısı</label>
                            <select id="ilan-tekne-kamara-sayisi" name="ilan-tekne-kamara-sayisi" class="form-control">
                                <option value="0">Yok</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5 ve üzeri</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-yatak-sayisi" class="control-label">Yatak Sayısı</label>
                            <select id="ilan-tekne-yatak-sayisi" name="ilan-tekne-yatak-sayisi" class="form-control">
                                <option value="0">Yok</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="1">6</option>
                                <option value="2">7</option>
                                <option value="3">8</option>
                                <option value="4">9</option>
                                <option value="5">10</option>
                                <option value="1">11</option>
                                <option value="2">12</option>
                                <option value="3">13</option>
                                <option value="4">14</option>
                                <option value="5">15</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-flybridge" class="control-label">Flybridge</label>
                            <select id="ilan-tekne-flybridge" name="ilan-tekne-flybridge" class="form-control">
                                <option value="0">Var</option>
                                <option value="1">Yok</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ilan-tekne-bulundugu-ulke" class="control-label">Bulunduğu Ülke</label>
                            <select id="ilan-tekne-bulundugu-ulke" name="ilan-tekne-bulundugu-ulke"
                                    class="form-control">
                                @foreach($formSecenekDatalari['bulunanUlkeler'] as $bulunanUlke)
                                    <option value="{{ $bulunanUlke->bulunan_ulke_id }}">{{ $bulunanUlke->bulunan_ulke_adi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="adres-bilgileri" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Adres Seçimi</div>

            <div class="panel-body">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="il-bilgisi" class="control-label">İl</label>
                            <select class="form-control" id="il-bilgisi" onchange="getIlceByIl()"
                                    name="il-bilgisi" required
                                    autofocus>
                                <option id="il-sec" value="0">İl Seçiniz</option>
                                @foreach($formSecenekDatalari['iller'] as $il)
                                    <option value="{{ $il->il_id }}">{{ $il->il_adi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="ilce-bilgisi" class="control-label">İlçe</label>
                            <select class="form-control" id="ilce-bilgisi" disabled="disabled"
                                    name="ilce-bilgisi" required
                                    autofocus>
                                <option id="ilce-sec" value="0">İlçe Seçiniz</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ek-detaylar" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Özellik Seçimi</div>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="alarm">Alarm</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="buz_yapici">Buz Yapıcı</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="buzdolabi">Buzdolabı</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="buzluk">Buzluk</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="cd_dvd_calar">CD / DVD Çalar</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="derinlik_gostergesi">Derinlik Göstergesi</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="elektrikli_irgat">Elektrikli Irgat</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="firin">Fırın</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="gps">GPS</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="hidrolik_tesisat">Hidrolik Tesisat</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="hiz_gostergesi">Hız Göstergesi</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="jenerator">Jeneratör</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="kirli_su_tanki">Kirli Su Tankı</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="klima">Klima</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="mutfak">Mutfak</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="palamer">Palamer</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="projektor">Projektör</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="pusula">Pusula</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="radar">Radar</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="salon">Salon</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="sogutucu">Soğutucu</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="telsiz">Telsiz</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="temiz_su_tanki">Temiz Su Tankı</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="yakit_tanki">Yakıt Tankı</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="yangin_sondurme_tertibati">Yangın Söndürme
                                Tertibatı</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="yuzme_merdiveni">Yüzme Merdiveni</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" value="sisme_bot">Şişme Bot</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ilan-foto" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Fotoğraf Yükleme</div>

            <div class="panel-body">
                Buralara foto yükle
                <img src="{{ $formSecenekDatalari['resimurl'] }}"/>
            </div>
        </div>
    </div>
</div>
<div id="ilan-video" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Video Yükleme</div>

            <div class="panel-body">
                Buralara video yükle
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('ilan-tekne-aciklama');

    function getIlceByIl() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var first = document.getElementById("il-sec");
        if (first !== null)
            first.remove();

        var city = document.getElementById("il-bilgisi");
        var cityId = city.options[city.selectedIndex].value;
        $.ajax({
            type: 'POST',
            url: '/api/ajax/ilceler',
            data: {cityIdForIlce: cityId, _token: CSRF_TOKEN},
            dataType: 'text',
            success: function (resultData) {
                if (document.getElementById("ilce-bilgisi").options.length > 1) {
                    removeOptions(document.getElementById("ilce-bilgisi"));
                }
                var jsonData = JSON.parse(resultData);
                for (var i = 0; i < jsonData.length; i++) {
                    var opt = jsonData[i];
                    var newOpt = document.createElement("option");
                    newOpt.value = opt.ilce_id;
                    newOpt.innerHTML = "" + opt.ilce_adi;
                    document.getElementById("ilce-bilgisi").appendChild(newOpt);
                }
                var first = document.getElementById("ilce-sec");
                if (first !== null)
                    first.remove();
                document.getElementById("ilce-bilgisi").disabled = false;
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