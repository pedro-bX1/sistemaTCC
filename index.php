<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Faça o Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h1>ENTRAR</h1>
    <form method = "POST">
        <input type="text" name="nome" placeholder="Insira seu nome completo">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <input type="submit" value="ACESSAR">
        <a href = "cadastro.php">Ainda não é inscríto?<strong>CADASTRE-SE!</strong>
    </form>
    
    <?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $identidade = $_POST['identidade'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM `usuarios` WHERE `nome` = '$nome' AND `senha`= '$senha'";

    $inserir = mysqli_query($connect, $sql);

    if(mysqli_num_rows($inserir) <= 0){
        echo "Usuário não existe na base de dados! <a href='login.php' <a/>" ;
    }else{
        echo "Entrou com sucesso";

        //associa os dados do usuário
        $dados_usuario = mysqli_fetch_assoc($inserir);
        $nome_usuario = $dados_usuario["nome"];

        session_start();
        $_SESSION['nome'] = $nome_usuario;

        header("Location: paginaInicial.php");
    }
?> 
    <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>