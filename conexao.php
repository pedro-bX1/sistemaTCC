//esse bloco é referente á conexão com o banco de dados
<?php
    define ('HOST', 'localhost');
    define ('USER', 'root');
    define ('PASS', '');
    define ('DBNAME', 'plano_acompanhamento');

    $conn = new PDO('mysql:host=' . HOST . 'dbname=' . DBNAME . ';' , USER, PASS);




?>