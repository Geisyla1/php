<?php
    require('../config.php');
    $array = [];
    $method = strtower($_SERVER['REQUEST_METHOD']);
    if($method==='get'){
            $sql->$pdo->query("SELECT * FROM notes");
            if($sql->rowCount()>0){
                $data = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach($data as $item){
                    $array['result']['']= [
                        'id'=>$item['id'],
                        'title'=>$item['title'],
                    ];
                }
            }

    }else{
        $array['error'] = 'Metodo não permitido (apenas GET)';
    }
    require('../return.php');