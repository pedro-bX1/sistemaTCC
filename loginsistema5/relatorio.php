<?php
    use Dompdf\Dompdf;
    require_once('dompdf/autoload.inc.php');

//arquivo que chama o DOMPDF para renderizar o arquivo pdf
    $document = new DOMPDF();

    ob_start();
    //comando para chamar um arquivo php ou html para transformar em pdf
    $page = file_get_contents("frequencia.html");
    $document->loadHtml($page);
    
    $document->setPaper("A4", "portrait");
    $document->render();
    $document->stream("relatorio.pdf", array(
        "Attachment" => false
    ));


?>