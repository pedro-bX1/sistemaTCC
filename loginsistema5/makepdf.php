<?php

require_once __DIR__ . '/vendor/autoload.php';

$mes = $_POST['mes'];
$data = $_POST['data_de_entrega'];
$nome_monitor = $_POST['nome_monitor'];
$com_curricular = $_POST['com_curricular'];
$matricula = $_POST['matricula'];
$hr_cumpridas = $_POST['hr_cumpridas'];
$orientador = $_POST['orientador'];
$dia_manha1 = $_POST['dia_manha1'];
$tarde_noite1 = $_POST['tarde_noite1'];
$rubrica1 = $_POST['rubrica1'];

$mpdf = new \Mpdf\Mpdf();

$data = '';
$data .= '<html>
<head>
  <style>
    table, th, td { 
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>        
<body>
    <center><img src = "img/header.jpg" /><center>
  <table>
    <thead>
      <tr>
        <td><center><img src = "img/logo.png">&nbsp;</span><center></td>
        <td colspan="7"><center>FOLHA DE FREQUÊNCIA - Campus: BRASILIA</center></td>                
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">Mês: '.$mes.'/2021</td>
        <td colspan="5">Folha entregue em: '. $data .'*Campo a ser preenchido pelo servidor que receber a folha</td>
        
      </tr>
      <tr>
        <td colspan="6">Monitor (a): '.$nome_monitor.' </td>
        <td colspan="2">Matrícula: '.$matricula.'</td>
        
      </tr>
      <tr>
        <td colspan="6">Componente curricular: '.$com_curricular.'</td>
        <td colspan="2">Total de horas cumpridas: '.$hr_cumpridas.'</td>
      </tr>
      <tr>
        <td colspan="8"><center>FREQUÊNCIA DO(A) ESTUDANTE</center></td>
      </tr>
      <tr >
        <td rowspan="2">Dia</td>
        <td colspan="2"><center>Manhã<center></td>
        <td rowspan="2">Rubrica do(a) monitor(a)</td>
        <td colspan="2"><center>Tarde / Noite<center></td>
        <td rowspan="2">Rubrica do(a) monitor(a)</td>
        <td rowspan="2">CH diária
          TOTAL</td>
      </tr>
      <tr>
        <td>Entrada</td>
        <td>Saída</td>
        <td>Entrada</td>
        <td>Saída</td>
      </tr>
      <tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>4</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>5</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>6</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>7</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>8</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>9</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>10</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>11</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>12</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>13</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>14</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>15</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>16</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>17</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </table>   
    <footer>
    <center><img src = "img/footer.jpg" /></center>
    </footer>
    </body>
</html>';

$mpdf->WriteHTML($data);
$mpdf->Output('meupdf.pdf', 'I');