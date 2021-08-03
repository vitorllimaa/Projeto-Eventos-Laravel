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
</head>
<body>
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
        <li class="nav-item">
            <a href="/" class="nav-link">Entrar</a>
        </li>
        <li class="nav-item">
            <a href="/" class="nav-link">Cadastrar</a>
        </li>
        </ul>
    </div>
</nav>
@yield('content')
<footer>
    <div class="rodape">
        <h6>Eventos HDS corporation &copy 2021</h6>
    </div>
</footer>
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>