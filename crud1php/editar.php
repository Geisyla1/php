<?php
    require 'config.php';
    require 'dao/usuarioDaomysql.php';

    $usuarioDao = new usuarioDaomysql($pdo);

    $usuario = false;
    $id = filter_input(INPUT_GET, 'id');
    if($id){
        $usuario = $usuarioDao->findById($id);

        /*
            IMPLEMENTAÇÃO DA PRIMEIRA PARTE DI CRUD
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $info = $sql->fetch(PDO:: FETCH_ASSOC);
            
        }else{
            header("Location: index.php");
            exit;
        }*/
    }/*else{
            header("Location: index.php");
            exit;
    }*/

    if($usuario===false){
        header("Location: index.php");
        exit;
    }
?>
<h1>Editar usuários</h1>
    <form method="post" action="editar_action.php">
        <input type="hidden" name="id" value="<?=$usuario->getId();?>">
        <label>
            Nome:<br/>
            <input type="text" name="name" value="<?=$usuario->getNome();?>"/>
        </label><br/><br/>

        <label>
            E-mail:<br/>
            <input type="email" name="email" value = "<?=$usuario->getEmail();?>"/>
        </label><br/><br/>
        <input type = "submit" value = "Salvar">
    </form>

