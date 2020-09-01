<?php
    use Dompdf\Dompdf;
    require_once('dompdf/autoload.inc.php');


    $document = new DOMPDF();

    ob_start();
    $page = file_get_contents("a/document4.php");
    $document->loadHtml($page);
    
    $document->setPaper("A4", "portrait");
    $document->render();
    $document->stream("relatorio.pdf", array(
        "Attachment" => false
    ));


?>