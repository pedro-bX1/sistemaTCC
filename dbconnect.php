<?php

    $servername = "localhost";
    $database = "uploaddepdfs";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Falha na conexão: ". mysqli_connect_error());
    }

?>