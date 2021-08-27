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
                        <td><p>gestão pública</p></td>
                        <td><p>matutino</p></td>
                        <td><a href='vis_arquivo.php?id=".$arquivo->id."target='_blank'><img src='img/337946.png' style='width:30px; height:30px; cursor:pointer;'></a></td>
                        
                </tr>";
            }


            break;

    }
?>