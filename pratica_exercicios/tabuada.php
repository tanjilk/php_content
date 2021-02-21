<div class="titulo">Tabuada</div>

<form action="#" method="post">
    <label for="num">Número</label>
    <input type="number" value="1" name="num">

</form>

<?php
    $num = intval($_POST['num']);
    for($i = 1; $i<=10; $i++){
        echo "$num X $i = " . $i*$num . '<br>';
    }
?>