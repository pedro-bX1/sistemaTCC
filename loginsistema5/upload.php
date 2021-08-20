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
<head><title>Upload</title><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></head>
<body>
    <?php if(isset($msg) && $msg != false){
        echo "<p>$msg</p>";
    }
    
    ?>
     <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" class="brand-logo">IFB Monitoria</a>
                <a href="#" class="sidenav-trigger" data-target="slide_out"><em class="material-icons">menu</em></a>

                    <ul class="hide-on-med-and-down right green">
                        <li class="active"><a>Contate a CGAE</a></li>     
                    </ul>
            </div>
        </div>
    </nav>
    
                    <ul class="sidenav" id="slide_out">
                        <li class="active"><a>Contate a CGAE</a></li>
                        
                    </ul>

                    <div class="card" id="telaUpload">
    
    <div class="card-body">
    <div class="mb-3">
    <form action="upload.php" method="post" enctype="multipart/form-data"></div>
    Selecione o arquivo: <input type="file" class="btn btn-success btn-lg" name="arquivo" />
    <input type="submit" class="btn btn-success btn-lg" value="Enviar">
</div></div>
</form>
</body>
</html>