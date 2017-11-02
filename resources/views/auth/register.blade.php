@extends('layouts.app')

@section('content')
    <script type="text/javascript">

        window.onload = function () {
            uyelikTipKontrol();
        };

        function uyelikTipKontrol() {
            if (document.getElementById('kurumsal-buton').checked) {
                document.getElementById('kurumsal-bolum').style.display = 'block';
                document.getElementById('bireysel-bolum').style.display = 'none';
            }
            else {
                document.getElementById('kurumsal-bolum').style.display = 'none';
                document.getElementById('bireysel-bolum').style.display = 'block';
            }
        }

        function sirketTipKontrol() {
            if (document.getElementById('sahis-sirket').checked) {
                document.getElementById('ticari-unvan').disabled = true;
                document.getElementById('tc-vergi-baslik').innerText = "TC Kimlik No";
                document.getElementById('tc-vergi-no').value = "";
                document.getElementById('tc-vergi-no').maxLength = 11;
            } else {
                document.getElementById('ticari-unvan').disabled = false;
                document.getElementById('tc-vergi-baslik').innerText = "Vergi No";
                document.getElementById('tc-vergi-no').value = "";
                document.getElementById('tc-vergi-no').maxLength = 10;
            }
        }

    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="bireysel-buton" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <input id="bireysel-buton" class="radio-inline" type="radio"
                                       onclick="uyelikTipKontrol();" name="hesap-type" value="1"
                                       @if(old('account-type') == 1 || old('account-type') == null)
                                       checked="checked"
                                        @endif>Bireysel
                                <input id="kurumsal-buton" class="radio-inline" type="radio"
                                       onclick="uyelikTipKontrol();" name="hesap-type"
                                       value="2"
                                       @if(old('account-type') == 2 && old('account-type') != null )
                                       checked="checked"
                                        @endif>Kurumsal
                            </div>
                        </div>
                        <div id="bireysel-bolum">
                            <form name="register" class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="account-type" value="1">


                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                               value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                    <label for="surname" class="col-md-4 control-label">Surname</label>

                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control" name="surname"
                                               value="{{ old('surname') }}" required autofocus>

                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm
                                        Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                </div>


                                <div id="uyelik-sozlesmeleri" style="display: block">
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="uyelik-sozlesme-onay"> Üyelik Sözleşme
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="uyelik-email-onay"> Üyelik Email İzin
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="kurumsal-bolum" style="display: none">
                            <form name="register" class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="account-type" value="2">

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                               value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                    <label for="surname" class="col-md-4 control-label">Surname</label>

                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control" name="surname"
                                               value="{{ old('surname') }}" required autofocus>

                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm
                                        Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('mobile-phone') ? ' has-error' : '' }}">
                                    <label for="mobile-phone" class="col-md-4 control-label">Mobile Phone</label>

                                    <div class="col-md-6">
                                        <input id="mobile-phone" type="tel" class="form-control" name="mobile-phone"
                                               placeholder="Örn: (5__)_______" value="{{ old('mobile-phone') }}"
                                               maxlength="10" autocomplete="off" required autofocus>

                                        @if ($errors->has('mobile-phone'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile-phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('faaliyet-alani') ? ' has-error' : '' }}">
                                    <label for="faaliyet-alani" class="col-md-4 control-label">Faaliyet Alanı</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="faaliyet-alani" name="faaliyet-alani" required
                                                autofocus>
                                            <option value="0">Faaliyet Alanı Seçiniz</option>
                                            <option value="Tekne İmalat">Tekne İmalat</option>
                                            <option value="Ekipman İmalat">Ekipman İmalat</option>
                                            <option value="Broker Alıp/Satma">Broker Alıp/Satma</option>
                                            <option value="Distribütörlük">Distribütörlük</option>
                                            <option value="Bayilik">Bayilik</option>
                                            <option value="Hizmet">Hizmet</option>
                                            <option value="Kişisel">Kişisel</option>
                                            <option value="Diğer">Diğer</option>
                                        </select>

                                        @if ($errors->has('faaliyet-alani'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('faaliyet-alani') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="company-type" class="col-md-4 control-label">İşletme Türü</label>

                                    <div class="col-md-6">
                                        <input id="sahis-sirket" class="radio-inline" type="radio"
                                               onclick="sirketTipKontrol()" name="company-type"
                                               value="1" checked="checked">Şahış Şirketi
                                        <input id="buyuk-sirket" class="radio-inline" type="radio"
                                               onclick="sirketTipKontrol()" name="company-type"
                                               value="2">Limited veya Anonim Şirketi
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('ticari-unvan') ? ' has-error' : '' }}">
                                    <label for="ticari-unvan" class="col-md-4 control-label">Ticari Ünvan</label>

                                    <div class="col-md-6">
                                        <input id="ticari-unvan" type="text" class="form-control" name="ticari-unvan"
                                               value="{{ old('ticari-unvan') }}" required autofocus disabled>

                                        @if ($errors->has('ticari-unvan'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('ticari-unvan') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('il-bilgisi') ? ' has-error' : '' }}">
                                    <label for="il-bilgisi" class="col-md-4 control-label">İl</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="il-bilgisi" onchange="getIlceByIl()"
                                                name="il-bilgisi" required
                                                autofocus>
                                            <option id="il-sec" value="0">İl Seçiniz</option>
                                            @foreach($ulke->il as $il)
                                                <option value="{{ $il->il_id }}">{{ $il->il_adi }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('il-bilgisi'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('il-bilgisi') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('ilce-bilgisi') ? ' has-error' : '' }}">
                                    <label for="ilce-bilgisi" class="col-md-4 control-label">İlçe</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="ilce-bilgisi" disabled="disabled"
                                                name="ilce-bilgisi" required
                                                autofocus>
                                            <option id="ilce-sec" value="0">İlçe Seçiniz</option>
                                        </select>

                                        @if ($errors->has('ilce-bilgisi'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('ilce-bilgisi') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('adres-bilgisi') ? ' has-error' : '' }}">
                                    <label for="adres-bilgisi" class="col-md-4 control-label">Adres Detayı</label>

                                    <div class="col-md-6">
                                        <textarea style="resize: none" id="adres-bilgisi" class="form-control"
                                                  name="adres-bilgisi" required autofocus>{{ old('adres-bilgisi') }}</textarea>

                                        @if ($errors->has('adres-bilgisi'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('adres-bilgisi') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('vergi-dairesi') ? ' has-error' : '' }}">
                                    <label for="vergi-dairesi" class="col-md-4 control-label">Vergi Dairesi</label>

                                    <div class="col-md-6">
                                        <input id="vergi-dairesi" type="text" class="form-control" name="vergi-dairesi"
                                               value="{{ old('vergi-dairesi') }}" required autofocus>

                                        @if ($errors->has('vergi-dairesi'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('vergi-dairesi') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('tc-vergi-no') ? ' has-error' : '' }}">
                                    <label id="tc-vergi-baslik" for="tc-vergi-no" class="col-md-4 control-label">TC
                                        Kimlik No</label>

                                    <div class="col-md-6">
                                        <input id="tc-vergi-no" type="text" class="form-control" name="tc-vergi-no"
                                               value="{{ old('tc-vergi-no') }}" maxlength="11" required autofocus>

                                        @if ($errors->has('tc-vergi-no'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tc-vergi-no') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('sirket-telefon') ? ' has-error' : '' }}">
                                    <label for="sirket-telefon" class="col-md-4 control-label">Şirket Telefon</label>

                                    <div class="col-md-6">
                                        <input id="sirket-telefon" type="tel" class="form-control" name="sirket-telefon"
                                               placeholder="Örn: (212)_______" value="{{ old('sirket-telefon') }}"
                                               maxlength="10" autocomplete="off" required autofocus>

                                        @if ($errors->has('sirket-telefon'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('sirket-telefon') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="kurumsal-sozlesme-onay"> Kurumsal Sözleşme
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getIlceByIl() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            var first = document.getElementById("il-sec");
            if (first !== null)
                first.remove();

            var city = document.getElementById("il-bilgisi");
            var cityId = city.options[city.selectedIndex].value;
            $.ajax({
                type: 'POST',
                url: 'api/ajax/ilceler',
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
@endsection
