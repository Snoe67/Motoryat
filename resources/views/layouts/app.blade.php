<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/sticky-footer.css" rel="stylesheet">

<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @stack('scripts')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                @if(Route::currentRouteName() == 'ilan-ver-adim-1')

                @elseif(Route::currentRouteName() == 'ilan-ver-adim-2')

                @else
                    <form class="navbar-form navbar-left">
                        <div class="input-group">
                            <input type="text" class="form-control"
                                   placeholder="Kelime, ilan no veya mağaza adı ile ara">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="arama-buton">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/ilan-ver/adim-1') }}">Ücretsiz İlan Ver</a></li>
                    </ul>
            @endif

            <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="
                                    @if(Auth::user()->fk_user_uyelik_tip_id == 1)
                                    {{url('hesabim/genel')}}
                                    @else
                                    {{url('kurumsalhesabim/genel')}}
                                    @endif
                                            ">
                                        Hesabım
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-1">
                    <div class="page-header h5">
                        Kurumsal
                    </div>
                    <ul>
                        <li><a href="#">Kurumsal 1</a></li>
                        <li><a href="#">Kurumsal 2</a></li>
                        <li><a href="#">Kurumsal 3</a></li>
                        <li><a href="#">Kurumsal 4</a></li>
                        <li><a href="#">Kurumsal 5</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="page-header h5">
                        Hizmetlerimiz
                    </div>
                    <ul>
                        <li><a href="#">Hizmet 1</a></li>
                        <li><a href="#">Hizmet 2</a></li>
                        <li><a href="#">Hizmet 3</a></li>
                        <li><a href="#">Hizmet 4</a></li>
                        <li><a href="#">Hizmet 5</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="page-header h5">
                        Vira
                    </div>
                    <ul>
                        <li><a href="#">Vira 1</a></li>
                        <li><a href="#">Vira 2</a></li>
                        <li><a href="#">Vira 3</a></li>
                        <li><a href="#">Vira 4</a></li>
                        <li><a href="#">Vira 5</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="page-header h5">
                        Mağaza
                    </div>
                    <ul>
                        <li><a href="#">Mağaza 1</a></li>
                        <li><a href="#">Mağaza 2</a></li>
                        <li><a href="#">Mağaza 3</a></li>
                        <li><a href="#">Mağaza 4</a></li>
                        <li><a href="#">Mağaza 5</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="page-header h5">
                        Müşteri Hizmetleri
                    </div>
                    <ul>
                        <li><a href="#">Müşteri Hizmetleri</a></li>
                        <li><a href="#">Müşteri Hizmetleri</a></li>
                        <li><a href="#">Müşteri Hizmetleri</a></li>
                        <li><a href="#">Müşteri Hizmetleri</a></li>
                        <li><a href="#">Müşteri Hizmetleri</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-1">
                    Sosyal Medya ve İletişim Bölümü Tek Satır
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-1">
                    İçerik Haklarını Koruma ve Copyright Satırı
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
