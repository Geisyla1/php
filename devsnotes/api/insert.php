<?php
    require('../config.php');

    $method = strtower($_SERVER['REQUEST_METHOD']);
    if($method==='post'){
       
        $title = filter_input(INPUT_POST,'title');
        $body = filter_input(INPUT_POST,'body');
        if($title && $body){
            $sql = $pdo->prepare("INSERT INTO notes (title, body) VALUE (:title,:body)");
            $sql->bindValue(':title',$title);
            $sql->bindValue(':body',$body);
            $sql->execute();

            $id = pdo->lastInsert();

            $array['result'] = [
                'id'=> $id,
                'title'=>$title,
                'body'=>$body
            ];


        }else{
            $array['error'] = 'Campos não enviado!';
        }

    }else{
        $array['error'] = 'Metodo não permitido (apenas POST)';
    }
    require('../return.php');