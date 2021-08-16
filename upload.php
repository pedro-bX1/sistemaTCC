<?php

    require './dbconnect.php';


    $msg = false;
    if(isset($_FILES['arquivo'])){
        $arquivo = $_FILES['arquivo']['name'];
        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

        $novo_nome = md5(time()).".".$extensao;

        $diretorio = "upload/";

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

        $sql_code = "INSERT INTO arquivo(id, arquivo, data) VALUES('', '$novo_nome', NOW())";

        if(mysqli_query($conn, $sql_code)){
            $msg =  "Arquivo enviado com sucesso!";
        }else{
            $msg = "Falha ao enviar arquivo.";
        }
    }
?>

<!DOCTYPE html>
<head><title>Upload</title></head>
<body>
    <?php if(isset($msg) && $msg != false){
        echo "<p>$msg</p>";
    }
    
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Selecione o arquivo: <input type="file" name="arquivo" />
    <input type="submit" value="Enviar">
</form>
</body>
</html>