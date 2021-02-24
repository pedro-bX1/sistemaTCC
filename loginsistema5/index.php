<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Login</title>
</head>
<body id="fundo">
    
    <div class="card" id="telaLogin">
    
    <div class="card-body">
        <h1><center>IFB monitoria</center></h1>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Usuário</label>
                <input type="text" class="form-control" placeholder="Insira o usuário" name="user">
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Insira a sua Senha" name="senha">
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-lg" name="btnLoginEntrar">Entrar</button>
                <button type="submit" class="btn btn-primary btn-lg" name="btnCadastro">Cadastre-se</button>
                
            </div>
 
    </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'login');

    $conexao = 'mysql:host='.HOST.';dbname='.BASE;

    try{
        $conecta = new PDO($conexao, USER, PASS);
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $erro){
        echo "Erro ao se conectar ao Banco de Dados. Erros:". $erro->getMessage;
    }
    error_reporting(0);
    $login = $_POST['user'];
    $senha = $_POST['senha'];

    $sql = $conecta->prepare("SELECT * FROM `logins` WHERE `login`= '$login' AND `senha`= '$senha'");

    $sql->execute();

    $num = $sql->rowCount();

    if($num > 0){
        session_start();
        $_SESSION['user'] = $login;
        $_SESSION['senha'] = $senha;

        $verificar = $conecta->query("SELECT * FROM logins");

        while ($linha = $verificar->fetch(PDO::FETCH_ASSOC)) {
              if($linha['login']==$login){
                $nivel = $linha['nivel'];

                switch ($nivel) {
                    case '0':
                        header("location:admin.php");
                        break;
                    case '01':
                        header("location:aluno.php");
                        break;
                    case '02':
                        header("location:professor.php");
                        break;
                    default:
                        echo "Você precisa estar cadastrado para entrar.";
                        break;
                }
              }       
        }
    }
?>