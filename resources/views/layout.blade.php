<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</head>
<body>
<style>

.container-fluid{
    padding:0px;
}

.navbar-brand
{
    position: relative;
    width: 250px;
    left: 0px;
}
</style>


<header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/img/logo.png')}}" class='img-fluid' alt="logotipo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pull-right" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Painel de Revisão</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rubrica">Orientação aos revisores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/assign/assign">Atribuir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/assign">Acompanhar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
 </header>

    @yield('conteudo-create')
    @yield('conteudo-login')
    @yield('conteudo-list')
    @yield('conteudo-assign')
    @yield('conteudo-panel')
    @yield('conteudo-rubrica')
</body>
</html>