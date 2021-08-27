<?php
session_start();
include_once("conexao.php");

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);

//echo "Email: $login<br>";

$result_usuario = "INSERT INTO logins ('login', senha, nivel) VALUES('$login', '$senha', '$nivel')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: cadastro.php");
}else{
    $_SESSION['msg'] = "Usuário não foi cadastrado com sucesso";
    header("Location: cadastro.php");
}