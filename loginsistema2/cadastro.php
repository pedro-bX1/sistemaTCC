<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
</head>
<body>
    <form method = "POST">
        <input type="text" name="nome" placeholder="Insira seu nome completo" maxlength="30">
        <input type="email" name="email" placeholder="Insira e-mail" maxlength="40">
        <input type="number" name="identidade" placeholder="Ponha seu numero de id" maxlength="30">
        <input type="password" name="senha" placeholder="Digite sua senha" maxlength="15">
        <input type="submit" value="Cadastrar">
    </form>
    
<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $identidade = $_POST['identidade'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO `usuarios`(`id_usuario`, `nome`, `email`, `identidade`, `senha`) VALUES (NULL, $nome, $email, $identidade, $senha)";

    $inserir = mysqli_query($connect, $sql);
    
    if($inserir){
        echo "Cadastrado com sucesso!";

        //associa os dados do usuário
        $dados_usuario = mysqli_fetch_assoc($inserir);
        $nome_usuario = $dados_usuario["nome"];

        session_start();
        $_SESSION['nome'] = $nome_usuario;

        header("Location: paginaInicial.php");
    }else{
        echo "Erro ao cadastrar <a href = 'cadastro.php'> Tente Novamente.</a>";
    }
?> 
</body>
</html>