<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="ultimo_nome">
    <select name="cidade">
        <option value="pt">Porto</option>
        <option value="ls">Lisboa</option>
        <option value="brg">Braga</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;

    }
</style>

<?php

    print_r($_POST);
    echo '<br>';
    print_r($_GET);
    echo '<br>';
    echo count($_POST);
?>