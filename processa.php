<?php
    session_start();
    include_once 'conexao.php';

    $send = filter_input(INPUT_POST, 'Send', FILTER_SANITIZE_STRING);
    if($send){
        $compon_cur = filter_input(INPUT_POST, 'compon_cur', FILTER_SANITIZE_STRING);
        $turma = filter_input(INPUT_POST, 'turma', FILTER_SANITIZE_STRING);
        $hor_inicio = filter_input(INPUT_POST, 'hor_inicio', FILTER_SANITIZE_STRING);
        $hor_final = filter_input(INPUT_POST, 'hor_final', FILTER_SANITIZE_STRING);
        $prof_orient = filter_input(INPUT_POST, 'prof_orient', FILTER_SANITIZE_STRING);
        $mes_ano = filter_input(INPUT_POST, 'mes_ano', FILTER_SANITIZE_STRING);
        $monitor = filter_input(INPUT_POST, 'monitor', FILTER_SANITIZE_STRING);
        $com_bolsa = filter_input(INPUT_POST, 'com_bolsa', FILTER_SANITIZE_STRING);
        $sem_bolsa = filter_input(INPUT_POST, 'sem_bolsa', FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
        $desc_ativ = filter_input(INPUT_POST, 'desc_ativ', FILTER_SANITIZE_STRING);
        $obs_prof = filter_input(INPUT_POST, 'obs_prof', FILTER_SANITIZE_STRING);
        $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);

        
        $result_msg_cont = "INSERT INTO preenchimento (`compon_cur`, `turma`, `hor_inicio`, `hor_final`, `prof_orient`, `mes_ano`, `monitor`, `com_bolsa`, `sem_bolsa`, `data`, `desc_ativ`, `obs_prof`, `assinatura`) VALUES (:compon_cur, :turma, :hor_inicio, :hor_final, :prof_orient, :mes_ano, :monitor, :com_bolsa, :sem_bolsa, :data, :desc_ativ, :obs_prof, :assinatura)";
        $result_msg_cont = $conn->prepare($result_msg_cont);
        $result_msg_cont->bindParam(':compon_cur', $compon_cur);
        $result_msg_cont->bindParam(':turma', $turma);
        $result_msg_cont->bindParam(':hor_inicio', $hor_inicio);
        $result_msg_cont->bindParam(':hor_final', $hor_final);
        $result_msg_cont->bindParam(':prof_orient', $prof_orient);
        $result_msg_cont->bindParam(':mes_ano', $mes_ano);
        $result_msg_cont->bindParam(':monitor', $monitor);
        $result_msg_cont->bindParam(':com_bolsa', $com_bolsa);
        $result_msg_cont->bindParam(':sem_bolsa', $sem_bolsa);
        $result_msg_cont->bindParam(':data', $data);
        $result_msg_cont->bindParam(':desc_ativ', $desc_ativ);
        $result_msg_cont->bindParam(':obs_prof', $obs_prof);
        $result_msg_cont->bindParam(':img', $img);
        if($result_msg_cont->execute()){
            $_SERVER['msg'] = "<p style='color:green;'>Mensagem enviada com sucesso<p>";
        header("Location: documento.php");
        }else{
            $_SERVER['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso<p>";
        header("Location: documento.php");
        }
    }else{
        $_SERVER['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso<p>";
        header("Location: documento.php");
    }

    $msg = false;

    if(isset($_FILES['img'])){
        $extensao = strtolower(substr($_FILES['img']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "upload/";

        move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);

        $sql_code = "INSERT INTO preenchimento (assinatura) VALUES ()";

        if(mysqli->query($sql_code)){
            $msg = "Arquivo enviado com sucesso!";
        }else{
            $msg = "Falha ao enviar.";
        }

    }
?>