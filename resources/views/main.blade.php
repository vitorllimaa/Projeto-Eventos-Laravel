<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/hdcevents_logo.ico" type="image/x-icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand d-flex form-inline">
            <img src="/img/hdcevents_logo.svg" id="logo" alt="Eventos HDS">
            <h2>Eventos HDS</h2>
            </a>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link">Eventos</a>
            </li>
            <li class="nav-item">
                <a href="/events/create" class="nav-link">Criar Eventos</a>
            </li>
            @auth
            <li class="nav-item">
                <a href="/login" class="nav-link">Meus Eventos</a>
            </li>
            <form action="/logout" method="POST">
                @csrf
                <a href="/logout" class="nav-link" onclick="event.preventDefault();
                this.closest('form').submit();">Sair</a>
            </form>
            @endauth
            @guest
            <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link">Cadastrar</a>
            </li>
            @endguest
            </ul>
        </div>
    </nav>
</header> 
<main>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('msg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            @endif
            @yield('content')
        </div>
    </div>
</main>  
<footer>
    <div class="rodape">
        <h6>Eventos HDS corporation &copy 2021</h6>
    </div>
</footer>
    <script src="/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
    <script  nomodule  src= "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js "></script>         
</body>
</html>