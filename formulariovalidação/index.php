<?php
session_start();
    if(isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
        echo '<h2>'.$nome.'</h2';
    }
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    if($nome){
        echo 'Olá, '.$nome.' -';
    }
    else{
        header("Location: login.php");
        exit;
    }
?>
 <a href="sair.php"> Sair</a>
