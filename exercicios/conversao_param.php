<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fhn">Cels > Fh</option>
        <option value="fhn-cel">Fhn > Cels</option>
    </select>

    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
/*
    echo $_POST['param'] . '<br>';
    echo $_POST['conversao'];
*/
    // Param (input user)
    // conversao (case)

    // 1km = 0.621 miles
    // 1km = 1000 meters 
    
    // Celsius to fahrenheit T(°F) = T(°C) × 9/5 + 32 
    // Fahrenheit to Celsius (F - 32) / 1.8

    switch ($_POST['conversao']){
        case 'km-milha':
            echo $_POST['param'] * 0.621;
            break;
        case 'milha-km':
            echo $_POST['param'] / 0.621;
            break;
        case 'metro-km':
            echo $_POST['param'] / 1000;
            break;
        case 'km-metro':
            echo $_POST['param'] * 1000;
            break;
        case 'cel-fhn':
            $fhn = $_POST['param'] * 9/5 + 32;
            echo $fhn;
            break;
        case 'fhn-cel':
            $cel = ($_POST['param'] - 32) / 1.8;
            echo $cel;
    }

?>