<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gazeta Transportes</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
        <link href="{{ url(mix('site/css/style.css')) }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/18c0c84c7c.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="navbar-example">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('site.home') }}">
                        <img src="{{ asset('storage/img/logo_branca.png') }}" alt="Logo Gazeta Transportes" id="navbar-logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item py-1">
                                <a class="nav-link active" aria-current="page" href="{{ route('site.home') }}#mainSlider">Início</a>
                            </li>

                            <li class="nav-item py-1">
                                <a class="nav-link" href="{{ route('site.home') }}#about-area">Sobre nós</a>
                            </li>

                            <li class="nav-item py-1">
                                <a class="nav-link" href="{{ route('site.home') }}#excursions-area">Excursões</a>
                            </li>

                            <li class="nav-item py-1">
                                <a class="nav-link" href="{{ route('site.home') }}#contact-title">Contato</a>
                            </li>

                            <li class="nav-item py-1">
                                <a class="nav-link" href="{{ route('site.home') }}#location-area">Localização</a>
                            </li>

                            @if(Auth::guard('admin')->check())
                                <li class="nav-item dropdown py-1">
                                    <a class="nav-link dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="admin">{{ Auth::guard('admin')->User()->nome }}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('perfil') }}">Minha Conta</a></li>
                                        <li><a class="dropdown-item" href="{{ route('perfil') }}">Minhas excursões</a></li>
                                        <li><a class="dropdown-item" href="{{ route('perfil') }}">Alterar minha senha</a></li>
                                        <li><a class="dropdown-item" href="{{ route('perfil') }}">Alterar meu e-mail</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('perfil.logout') }}">Sair</a></li>

                                    </ul>
                                </li>
                            @else

                            <li class="nav-item py-1">
                                <a href="{{ route('perfil.login') }}" class="nav-link btn" id="admin">Entrar <i class="fa-solid fa-user"></i></a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <div id="copy-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img id="logo-copy" src="{{ asset('storage/img/logo_branca.png') }}" alt="LAMOAM">
                            <p>Copyright <a href="">Gazeta Transportes</a> &copy; {{ date('Y') }} </br> Desenvolvido por  <a href="https://www.linkedin.com/in/gabrielpaiao/" target="_blank">Gabriel Paião</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="{{ url(mix('site/js/script.js')) }}"></script>
    </body>
</html>
