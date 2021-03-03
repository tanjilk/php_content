<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
    // Dois trabalhos --> Terça e Quinta!
    /*
    Se os dois forem executados: TV 50
    Se apenas um for executado: TV 32
    Se nenhum for executado: Fica em casa!
    */
    
    if($_POST['t1'] == 1 && $_POST['t2'] == 1){
        echo 'TV 50';
    } else if($_POST['t1'] == 1 && $_POST['t2'] == 0){
        echo 'TV 32';
    } else if($_POST['t1'] == 0 && $_POST['t2'] == 1){
        echo 'TV 32';
    } else {
        echo 'Fica em casa!';
    }
?>