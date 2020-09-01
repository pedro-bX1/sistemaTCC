<?php
    require_once 'cadastrando.php';
    $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de cadastro</title>
</head>
<body>
    <form name="cadastro" method="POST">

    <input type="text" name="nome" placeholder="Nome Completo" maxlength="30"/>
    <input type="email" name="email" placeholder="E-mail" maxlength="40">
    <input type="number" name="identidade" placeholder="Número de id" maxlength="30"/> 
    <input type="password" name="senha" placeholder="Insira uma senha" maxlength="30">
    <input type="password" name="confSenha" placeholder="Confirme sua senha" maxlength="30">
    <input type="submit" value="Cadastrar"/>  
    
    </form>
    <?php
    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $identidade = addslashes($_POST['identidade']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confSenha']);

        if(!empty($nome) && !empty($email) && !empty($identidade) && !empty($senha) && !empty($confirmarSenha)){
            $u->conectar("cadastro", "localhost", "root", "");
            if($u->$msgErro == ""){
                if($senha == $confirmarSenha){
                    if($u->cadastrar($nome, $email, $identidade, $senha)){
                        echo "Cadastrado com sucesso, acesse para entrar";
                    }else{
                        echo "E-mail já cadastrado";
                    }
                }else{
                    echo "Senha e confirmação não correspondem!";
                }
            }else{
                echo "Erro: ".$u->$msgErro;
            }
        }else{
            echo "Preencha todos os campos!";
        }

    }
    ?>
</body>
</html>