<?php $render('header'); ?>

<h2>Adicionar Novo Usúario</h2>
<form method = "POST" action="<?=$base;?>/novo">
    <label>
        Nome: <br/>
        <input type="text" name="name"/>
    </label><br/><br/>

    <label>
        E-mail: <br/>
        <input type="email" name="email"/>
    </label><br/><br/>
    <input type="submit" value="enviar">
</form>

<?php $render('footer'); ?>