<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Preenchimento do plano de acompanhamento</title>
</head>
<body>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php" enctype="multipart/form-data">
        <input type="text" name="compon_cur" placeholder="Componente curricular" maxlength="30"/>
        <input type="text" name="turma" placeholder="Turma" maxlength="10"/>
        <input type="text" name="hor_inicio" placeholder="Horário Inicial" maxlength="5"/>
        <input type="text" name="hor_final" placeholder="Horário Final" maxlength="5"/>
        <input type="text" name="prof_orient" placeholder="Professor orientador" maxlength="40"/>
        <input type="text" name="mes_ano" placeholder="Mês/Ano" maxlength="7"/>
        <input type="text" name="monitor" placeholder="Monitor" maxlength="40"/>
        <input type="text" name="com_bolsa" placeholder="Com bolsa" maxlength="1"/>
        <input type="text" name="sem_bolsa" placeholder="Sem bolsa" maxlength="1"/>
        <input type="text" name="data" placeholder="Data" maxlength="6"/>
        <input type="text" name="desc_ativ" placeholder="Descrição da atividade" maxlength="40"/>
        <input type="text" name="obs_prof" placeholder="Observações do professor" maxlength="40"/>
        <input type="file" src="bithoquinha.jpg" name="img"/>
        <input type="submit" name="Send">
    </form>
</body>
</html>

