<?php
    $conn = new mysqli("localhost", "root", "", "uploaddepdfs");
    mysqli_set_charset($conn, "utf-8");

    $metodo = $_POST["metodo"];

    switch ($metodo) {
        case 'LISTAR_ARQUIVOS':
            $result = $conn->query("SELECT id, arquivo, data FROM arquivo");
            while($arquivo = mysqli_fetch_object($result)){
                echo "<tr>
                        <td>".$arquivo->id."</td>
                        <td>".$arquivo->arquivo."</td>
                        <td>".$arquivo->data."</td>
                        
                </tr>";
            }


            break;

    }
?>