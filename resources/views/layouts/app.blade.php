<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#00695c" />

    <title>Upomoć, majstore!</title>
    <!-- SOME FREE ICONS FOR THIS PROJECT WERE PROVIDED BY FREEPIK.COM! MUCH THANKS! -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#00695c">
    <meta name="msapplication-TileColor" content="#00695c">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#00695c">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/mdb.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">

    <!--Navbar-->
    <nav class="navbar navbar-light default-color-dark">

        <!-- Collapse button-->
        <button class="white-text navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            Meni <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-sm" id="collapseEx">
                <!--Navbar Brand-->
                <a href="{{ url('/') }}"><img class="navbar-brand" src="{{ asset('/images/logo.png') }}" alt="logo"></a>
                <!--Links-->
                <ul class="pull-left nav navbar-nav">
                    <li class="nav-item">
                        <a class="white-text black-text default-color-dark" href="{{ url('/') }}"><i class="fa fa-btn fa-home"></i> Početna</a>
                    </li>
                    <li class="nav-item">
                        <a class="white-text default-color-dark" href="{{ url('/post') }}"><i class="fa fa-btn fa-list-ul"></i> Svi problemi</a>
                    </li>
                    <li class="nav-item">
                        <a class="white-text default-color-dark" href="{{ url('/post/create') }}"><i class="fa fa-btn fa-plus-circle"></i> Novi problem</a>
                    </li>
                    <li class="nav-item">
                        <a class="white-text default-color-dark" href="{{ url('/faq') }}"><i class="fa fa-btn fa-question-circle"></i> Pomoć</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">


                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a class="orange-text default-color-dark" href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Prijavi se</a></li>
                    <li><a class="orange-text default-color-dark" href="{{ url('/register') }}"><i class="fa fa-btn fa-user-plus"></i> Registruj se</a></li>
                    @else

                    <li> <a href="{{ url('/me') }}" class="orange-text default-color-dark" role="button" aria-expanded="false"><i class="fa fa-btn fa-user"></i> Moj nalog</a></li>

                    <li><a class="orange-text default-color-dark" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Odjavi se</a></li>

                    @endif
                </ul>

            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    
    <div class="body-white">
        @yield('content')
    </div>

    <footer class="page-footer default-color-dark center-on-small-only">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="text-center">
                 Dugme "Pomoćnik" - <i tabindex=0 class="text-center col-sm-offset-0 col-xs-offset-3 fa fa-question-circle right helper-button orange-text" role="button" data-animation="true" data-toggle="popover" data-trigger="click" data-placement="bottom" title="Pomoćnik" data-content="Ovo je Vaš mali pomoćnik na ovom sajtu. Odgovoriće na svako Vaše usputno pitanje. Ukoliko, pak, imate pitanje viška, posetite stranicu -> Pomoć"></i> služi da Vam pomogne gde god da se nalazite na sajtu. Ukoliko naiđete na neki problem ili nejasnoću, kliknite na dugme i prikazaće Vam se adekvatna pomoć.
             </div>
         <hr>
         </div>
         <div class="row">
            <div class="text-left col-md-6 col-md-offset-1">
                <h5 class="orange-text">Donacije</h5>
                <p class="grey-text text-lighten-4">Kako bi se izbegao reklamni materijal, ovaj sajt se održava isključivo uz pomoć vaših donacija. Hvala!</p>
                <p class="grey-text text-lighten-4">Ukoliko želite da pomognete u održavanju sajta, možete donirati klikom na dugme ispod:</p>
                <a href="{{ url('donate') }}" class="btn btn-warning"><i class="fa fa-btn fa-money"></i> Doniraj</a><br><br>
            </div>
            <div class="text-left col-md-5">
                <h5 class="orange-text">Mapa sajta</h5>
                <ul>
                    <li><a class="white-text" href="{{ url('/') }}"><i class="fa fa-btn fa-home"></i> Početna stranica</a></li>
                    <li><a class="white-text" href="{{ url('/post') }}"><i class="fa fa-btn fa-list-ul"></i> Pregled problema</a></li>
                    <li><a class="white-text" href="{{ url('/post/create') }}"><i class="fa fa-btn fa-plus-circle"></i> Postavi novi problem</a></li>
                    <li><a class="white-text" href="{{ url('/listusers') }}"><i class="fa fa-btn fa-users"></i> Lista korisnika</a></li>
                    <li><a class="white-text" href="{{ url('/faq') }}"><i class="fa fa-btn fa-question-circle"></i> Pomoć</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center rgba-black-light">
        <div class="container-fluid">
            © <?php echo date('Y'); ?> Copyright
        </div>
    </div>
</footer>


<!-- JavaScripts -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
