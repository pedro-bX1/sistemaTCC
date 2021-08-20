<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do aluno</title>
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

                    <ul class="hide-on-med-and-down right green">
                        <li class="active"><a>Contate a CGAE</a></li>     
                    </ul>
            </div>
        </div>
    </nav>
    
                    <ul class="sidenav" id="slide_out">
                        <li class="active"><a>Contate a CGAE</a></li>
                        
                    </ul>

  <div class="container">
    <div class="row">
    <div class="col l4 m4 s12">
    <div class="card sticky-action">
        <div class="card-image">
            <img src="img/frq.png">
            <span class="card-title">Ficha de frequência</span>
            <a class="btn green btn-floating halfway-fab pulse activator">+</a>
        </div>
            <div class="card-content">
                    <p>Preencha esse documento</p>
            </div>
                <div class="card-reveal">
                    <span class="card-title">Ficha de frequência<i class="right">X</i></span>
                    <p>Esse documento auxilia no controle da frequencia dos alunos atendidos pelo monitor.</p>
                </div>
                    <div class="card-action">
                    <a class="waves-effect waves-light btn-large green" href="form-frequencia.html">PREENCHER</a>
                    </div>
    </div>
    </div>
    <div class="col l4 m4 s12"><div class="card sticky-action">
        <div class="card-image">
            <img src="img/mes.jpg">
            <span class="card-title">PLANO DE ACOMPANHAMENTO MENSAL</span>
            <a class="btn green btn-floating halfway-fab pulse activator">+</a>
        </div>
            <div class="card-content">
                    <p>Preencha esse documento</p>
            </div>
                <div class="card-reveal">
                    <span class="card-title">Doc1<i class="right">X</i></span>
                    <p>Esse documento é sobre isso e isso</p>
                </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn-large green" href="form-frequencia.html">PREENCHER</a>
                    </div>
    </div>
</div>
    <div class="col l4 m4 s12"><div class="card sticky-action">
        <div class="card-image">
            <img src="img/alunos1.jpg">
            <span class="card-title">FREQUÊNCIA DOS ESTUDANTES MONITORADOS</span>
            <a class="btn green btn-floating halfway-fab pulse activator">+</a>
        </div>
            <div class="card-content">
                    <p>Preencha esse documento</p>
            </div>
                <div class="card-reveal">
                    <span class="card-title">Doc1<i class="right">X</i></span>
                    <p>Esse documento é sobre isso e isso</p>
                </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn-large green" href="form-frequencia.html">PREENCHER</a>
                    </div>
    </div>
</div>
<div class="col l4 m4 s12"><div class="card sticky-action">
        <div class="card-image">
            <img src="img/28510.jpg">
            <span class="card-title">Enviar documento</span>
            <a class="btn green btn-floating halfway-fab pulse activator">+</a>
        </div>
            <div class="card-content">
                    <p>Envio de documento Ficha de frequência</p>
            </div>
                <div class="card-reveal">
                    <span class="card-title">Doc1<i class="right">X</i></span>
                    <p>Esse documento é sobre isso e isso</p>
                </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn-large green" href="upload.php">ENVIAR</a>
                    </div>
    </div>

</div>
<div class="col l4 m4 s12"><div class="card sticky-action">
        <div class="card-image">
            <img src="img/28510.jpg">
            <span class="card-title">Enviar documento</span>
            <a class="btn green btn-floating halfway-fab pulse activator">+</a>
        </div>
            <div class="card-content">
                    <p>Envio de documento PLANO DE ACOMPANHAMENTO MENSAL</p>
            </div>
                <div class="card-reveal">
                    <span class="card-title">Doc1<i class="right">X</i></span>
                    <p>Esse documento é sobre isso e isso</p>
                </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn-large green" href="upload.php">ENVIAR</a>
                    </div>
    </div>
    
    </div>
    <div class="col l4 m4 s12"><div class="card sticky-action">
        <div class="card-image">
            <img src="img/28510.jpg">
            <span class="card-title">Enviar documento</span>
            <a class="btn green btn-floating halfway-fab pulse activator">+</a>
        </div>
            <div class="card-content">
                    <p>Envio de documento FREQUÊNCIA DOS ESTUDANTES MONITORADOS</p>
            </div>
                <div class="card-reveal">
                    <span class="card-title">Doc1<i class="right">X</i></span>
                    <p>Esse documento é sobre isso e isso</p>
                </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn-large green" href="upload.php">ENVIAR</a>
                    </div>
    </div>


  </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    const slide_menu = document.querySelectorAll(".sidenav");
    M.Sidenav.init(slide_menu,{});
    </script>
</body>
</html>