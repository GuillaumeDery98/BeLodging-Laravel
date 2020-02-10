<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js">
    </script>



    <title>@yield('titre')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-primary">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12 fixed-top">
                <a class="navbar-brand" href="/">BeLodging</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Acceuil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/lol">Link</a>
                        </li>
                    </ul>
                    <div class="nav-item dropleft">
                        @if (Auth::check())
                        <a class="nav-link dropdown-toggle text-light" href="{{ route('login') }}" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Se déconnecter</a>
                            @else
                            <a class="nav-link dropdown-toggle text-light" href="{{ route('login') }}"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}">Se connecter</a>
                                <a class="dropdown-item" href="{{ route('register') }}">S'inscrire</a>
                                @endif
                            </div>
                        </div>
            </nav>
        </div>

        <div class="row pt-3 pb-3 mt-5 mb-5">
            <div class="offset-md-3 col-md-6 col-sm-12 contenu">
                @yield('contenu')
            </div>

        </div>
        <!-- Footer -->
        <footer class="page-footer font-small blue fixed-bottom bg-dark">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-light col-12">© 2020 Copyright :
                <a href="https://github.com/GuillaumeDery98" class="text-light"> Guillaume Dery</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
</body>

</html>
