<?php
    session_start();
    $logado = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    bem vindo <?php echo $logado; ?>
</body>
</html>