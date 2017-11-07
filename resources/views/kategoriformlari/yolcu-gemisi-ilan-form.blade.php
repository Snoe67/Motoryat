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
                    <label for="ilan-aciklama" class="control-label">Açıklama</label>
                    <input type="text" class="form-control" name="ilan-aciklama" id="ilan-aciklama"/>
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
                            <input type="number" class="form-control" name="ilan-tekne-yil"
                                   id="ilan-tekne-fiyat"/>
                        </div>
                        <div class="col-md-3">
                            <label for="para-birimi-secimi" class="control-label">Para Birimi</label>
                            <select id="para-birimi-secimi" class="form-control">
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
                            <select id="ilan-durumu" class="form-control">
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
                            <select id="ilan-takasli" class="form-control">
                                <option value="1">Evet</option>
                                <option value="0">Hayır</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</div>
<div id="adres-bilgileri" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Adres Seçimi</div>

            <div class="panel-body">
                Adresler adresler
            </div>
        </div>
    </div>
</div>
<div id="ek-detaylar" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Özellik Seçimi</div>

            <div class="panel-body">
                Hep özellik
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