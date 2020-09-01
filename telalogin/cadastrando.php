<?php
    Class Usuario{
        private $pdo;
        public $msgErro = "";

        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $msgErro;
            try{
                $pdo = new PDO("mysql:dbname=".$nome.";host=.$host,$usuario,$senha");
            }catch(PDOException $e){
                $msgErro = $e->getMessage();
            }
        }
        public function cadastrar($nome, $email, $identidade, $senha){
            global $pdo;
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $sql->bindValue(":e", $email);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;
            }else{
                $sql = $pdo->prepare("INSERT INTO usuarios ($nome, $email, $identidade, $senha) VALUES (:n, :e, :i, :s)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":i", $$identidade);
                $sql->bindValue(":s", md5($senha));
                $sql->execute();
                return true;
            }

        }
        public function logar($email, $senha){
            global $pdo;
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dado['id_usuario'];
                return true;
            }else{
                return false;
            }
        }
        
        
    }



?>
