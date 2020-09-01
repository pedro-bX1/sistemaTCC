<?php
    $connect = mysqli_connect("localhost", "root", "") or die
    ("Não foi possível conectar á base de dados!");
    var_dump($db);
    $db = mysqli_select_db($connect, "cadastro") or die
    ("Impossível conectar á base de dados!");
?>