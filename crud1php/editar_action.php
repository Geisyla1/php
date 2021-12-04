<?php
    require 'config.php';
    require 'dao/usuarioDaomysql.php';

    $usuarioDao = new usuarioDaomysql($pdo);

    $id= filter_input(INPUT_POST,'id');
    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

    if($id && $name && $email){
        $usuario = $usuarioDao->findById($id);
        $usuario->setNome($name);
        $usuario->setEmail($email);
        $usuarioDao->update($usuario);

         /* 
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
       }
       */
      /*
                IMPLEMENTAÇÃO UTILIZADAS NA PRIMEIRA VERSÃO DO CRUD
                $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
                $sql->bindValue(':name',$name);
                $sql->bindValue(':email',$email);
                $sql->bindValue(':id',$id);
                $sql->execute();
       */

            header("Location: index.php");
            exit;
    }else{
            header("Location: editar.php?id=".$id);
            exit;
    }