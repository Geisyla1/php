<?php
    $array = ['Nome'=> 'Geisyla',
    'Idade'=> 25,
    'Empresa'=>'DTI',
    'Cor'=>'Preta',
    'Profissão'=>'Front-end'
];
?>
<table border = "1">
    <?php foreach($array as $chave =>$valor):?>
    <tr>
        <th><?php echo $chave; ?></th>
        <td><?php echo $valor; ?></td>
    </tr>
    <?php endforeach; ?>
</table>