<?php
         require 'config.php';
         require 'dao/usuarioDaomysql.php';

         $usuarioDao = new usuarioDaomysql($pdo);

         $id = filter_input(INPUT_GET,'id');
         if($id){
               $usuarioDao->delete($id);
         
               /*$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
               $sql->bindValue(':id',$id);
               $sql->execute();*/
         }
         header("Location: index.php");
         exit;