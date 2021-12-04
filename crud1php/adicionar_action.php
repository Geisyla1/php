<?php
    require 'config.php';

    require 'dao/usuarioDaomysql.php';
    $usuarioDao = new usuarioDaomysql($pdo);

    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    if($name && $email){
            if($usuarioDao->findByEmail($email)===false){
                $novoUsuario = new usuario();
                $novoUsuario->setNome($name);
                $novoUsuario->setEmail($email);

                $usuarioDao->add($novoUsuario);
                header("Location: index.php");
                exit;
            }else{
                header("Location: adicionar.php");
                exit;
            }


            /*
            IMPLEMENTAÇÕES DA PRIMEIRA PARTE DO CRUD
            $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
            $sql->bindValue(':email',$email);
            $sql->execute();


        if($sql->rowCount()===0){

            $sql = $pdo->prepare("INSERT INTO usuarios(nome,email) VALUES (:name, :email)");
            $sql->bindValue(':name',$name);
            $sql->bindparam(':email',$email);
            $sql->execute();

            header("Location: index.php");
            exit;
        }else{
            header("Location: adicionar.php");
            exit;
       }*/
    }else{
            header("Location: adicionar.php");
            exit;
    }