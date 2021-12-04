<?php
    require 'config.php';
    require 'dao/usuarioDaomysql.php';

    $usuarioDao = new usuarioDaomysql($pdo);
    $lista = $usuarioDao->findAll();
    /*
        IMPLEMENTAÇÕES DA PRIMEIRA VERSÃO DO CRUD
        $lista = [];
        $sql = $pdo->query("SELECT * FROM usuarios");
        if($sql->rowCount()>0){
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        $dados = $sql->fetchall(PDO::FETCH_ASSOC );
        echo "TOTAL: ".$sql->rowCount();
        echo '<pre>';
        print_r($dados);
    */
?>
<a href="adicionar.php">ADCIONAR</a>
<table border="1" width=100%>
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>AÇÕES</th>
</tr>
<?php foreach($lista as $usuario):?>
    <tr>
        <td><?=$usuario->getId();?></td>
        <td><?=$usuario->getNome();?></td>
        <td><?=$usuario->getEmail();?></td>
        <td>
            <a href= "editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
            <a href= "excluir.php?id=<?=$usuario->getId();?>"onclick="return confirm('Tem certeza que deseja excluir')">[ Excluir ]</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>