<?php
    $conn = new mysqli("localhost", "root", "", "uploaddepdfs");
    mysqli_set_charset($conn, "utf-8");

    $id = $_GET["id"];
    $result = $conn->query("SELECT conteudo, arquivo FROM uploaddepdfs WHERE id= $id");
    $query = mysqli_fetch_object($result);

    if(mysqli_num_rows($result) > 0){
        	$dados = converte($query->conteudo);

			header('Pragma: public');
	        header('Expires: 0');
	        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	        header('Content-Type: application/pdf');
	        header('Content-disposition: inline; filename='.$query->arquivo);
	        header('Content-Transfer-Encoding: binary');
	        header('Content-Length: '.strlen($dados));
	        print $dados;
        }	
	
	function converte($str) 
    {
       $bin = "";
       $i = 0;
       do {
        $bin .= chr(hexdec($str{$i}.$str{($i + 1)}));
        $i += 2;
       } while ($i < strlen($str));
       return $bin;
    }

?>