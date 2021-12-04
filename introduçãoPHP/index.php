<?php
    $lista = [ 'nome' => 'Geisyla',
    'idade' => 25, 
    'atributos' => [
    'força' => 60,
    'agilidade'=>80,
    'destreza'=>50
],
    'vida' => 1000,
    'mana' => 928,
];
    echo "NOME: ".$lista['nome']."</br>";
    echo "FORÇA: ".$lista['atributos']['força']."</br>";
    echo "VIDA: ".$lista['vida'];
?>