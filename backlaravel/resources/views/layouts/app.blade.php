<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site admin supporter TFC">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin TFC Supporters</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/tfc1.png"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">

<!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark sticky-top bgTfc">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    Accueil
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ml-5">
                        <!-- Onglet Joueurs du TFC -->
                        <li class="nav-item">
                            <a class="nav-link active mr-3" href="{{ route('players_index') }}">{{ __('Les joueurs du
                                TFC') }}</a>
                        </li>
                        <!-- Onglet Les photos envoyés par les supprters -->
                        <li class="nav-item">
                            <a class="nav-link active mr-3" href="{{ route('photos_index') }}">{{ __('Les photos des
                                supporters') }}</a>
                        </li>
                        <!-- Onglet photos des supporters selectionnés par l'Admin -->
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('top_index') }}">{{ __('Le top photo') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Logout -->
                        <li class="nav-item">
                            <div>
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Se déconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- Alerte info success ou error lors des action de modification et suppression sur le site  -->
        <main class="py-4 mb-3" role="main">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show col-xs-12 col-md-6 mx-auto text-center" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endforeach
            @endif

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show col-xs-12 col-md-6 mx-auto text-center" role="alert">
                {{session("success")}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show col-xs-12 col-md-6 mx-auto text-center" role="alert">
                {{session("error")}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            
<!-- Main Content -->
            @yield('content')

        </main>

<!-- Footer -->
        <footer class="bgTfc">
            <div class="navbar">
            <ul class="nav nav-link card-header-tabs mr-auto">
            <li class="ml-2 nav-item text-white">&copy TFC supporters Bouyaka</li>
            </ul>
            
            <ul class="nav nav-tabs card-header-tabs ml-auto">
                <li><a href="https://github.com/SDarmandieu" target="_blank" rel="noopener" class="m-4 nav-item text-white"><i class="fab fa-github"></i> Simon</a></li>
                <li><a href="https://github.com/BlunT76" target="_blank" rel="noopener"class="m-4 nav-item text-white"><i class="fab fa-github"></i> Philippe</a></li>
                <li><a href="https://github.com/OmnipreZz" target="_blank" rel="noopener"class="m-4 nav-item text-white"><i class="fab fa-github"></i> Geoffrey</a></li>
                <li><a href="https://github.com/Vanoux" target="_blank" rel="noopener"class="m-2 nav-item text-white"><i class="fab fa-github"></i> Vanessa</a></li>
            </ul>
            </div>
        </footer>
    </div>
</body>

</html>
