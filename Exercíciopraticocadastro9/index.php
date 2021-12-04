<form method = "POST">
    <label>
        Novo Nome:
        <br/>
        <input type = "text" name = "nome"/>
    </label>
    <input type = "submit" value = "adicionar"/>
</form>

<?php
    //ESSA QUESTÃO ESTÁ INCOMPLETA
    $texto = file_get_contents('texto.txt');
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $texto;
?>

