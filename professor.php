<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Professor</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" class="brand-logo">IFB Monitoria</a>
                <a href="#" class="sidenav-trigger" data-target="slide_out"><em class="material-icons">menu</em></a>

                    <ul class="hide-on-med-and-down right">
                        <li class="active"><a>Home</a></li>
                        <li><a>Notícias</a></li>
                        <li><a>Sobre</a></li>
                        <li><a>Contato</a></li>         
                    </ul>
            </div>
        </div>
    </nav>
    
                    <ul class="sidenav" id="slide_out">
                        <li class="active"><a>Home</a></li>
                        <li><a>Notícias</a></li>
                        <li><a>Sobre</a></li>
                        <li><a>Contato</a></li>
                    </ul>

                    <a class="waves-effect waves-light btn-large" href="form-frequencia.html">Formulário de Ficha de frequência</a>
                    
                    <a class="waves-effect waves-light btn-large"><i class="material-icons right"></i>Requerimento de Recurso</a>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    const slide_menu = document.querySelectorAll(".sidenav");
    M.Sidenav.init(slide_menu,{});
    </script>
</body>
</html>