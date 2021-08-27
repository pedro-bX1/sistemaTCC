<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Cadastro</title>
</head>
<body id="fundo">
    
    <div class="card" id="telaLogin">
    
    <div class="card-body">
        <h1><center>Cadastro - IFB monitoria</center></h1>
        <?php
        if(isset($SESSION['msg'])){
            echo $SESSION['msg'];
            unset($SESSION['msg']);
        }
        
        
        
        ?>
        <form method="POST" action = "pro_cadastro.php">

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" placeholder="Insira o e-mail" name="login">
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Insira a sua Senha" name="senha">
            </div>

            <div class="mb-3">
                <label class="form-label">Nível</label>
                <input type="number" class="form-control" placeholder="Nível" name="nivel">
            </div>
            
            <div class="d-grid gap-2">
                
                <button type="submit" class="btn btn-primary btn-lg" name="btnCadastro">Cadastrar</button>
                
            </div>
 
    </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>