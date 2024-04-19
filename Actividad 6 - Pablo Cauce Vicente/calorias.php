<?php
$pesoKg = $_POST["peso"];
$pesoLb = $pesoKg * 2.205;

if ($_POST["actividad"] == "actividad1") {
    $actividad = 1;
} elseif ($_POST["actividad"] == "actividad2") {
    $actividad = 2;
} else {
    $actividad = 3;
}

if ($_POST["objetivo"] == "objetivo1") {
    $objetivo = 1;
} elseif ($_POST["objetivo"] == "objetivo2") {
    $objetivo = 2;
} else {
    $objetivo = 3;
}

if ($_POST["biotipo"] == "biotipo1") {
    $biotipo = 1;
} elseif ($_POST["biotipo"] == "biotipo2") {
    $biotipo = 2;
} else {
    $biotipo = 3;
}

switch (true) {
    case ($actividad == 1 && $objetivo == 1):
        $rangoKcalMin = $pesoLb * 10;
        $rangoKcalMax = $pesoLb * 12;
        break;
    case ($actividad == 1 && $objetivo == 2):
        $rangoKcalMin = $pesoLb * 12;
        $rangoKcalMax = $pesoLb * 14;
        break;
    case ($actividad == 1 && $objetivo == 3):
        $rangoKcalMin = $pesoLb * 16;
        $rangoKcalMax = $pesoLb * 18;
        break;
    case ($actividad == 2 && $objetivo == 1):
        $rangoKcalMin = $pesoLb * 12;
        $rangoKcalMax = $pesoLb * 14;
        break;
    case ($actividad == 2 && $objetivo == 2):
        $rangoKcalMin = $pesoLb * 14;
        $rangoKcalMax = $pesoLb * 16;
        break;
    case ($actividad == 2 && $objetivo == 3):
        $rangoKcalMin = $pesoLb * 18;
        $rangoKcalMax = $pesoLb * 20;
        break;
    case ($actividad == 3 && $objetivo == 1):
        $rangoKcalMin = $pesoLb * 14;
        $rangoKcalMax = $pesoLb * 16;
        break;
    case ($actividad == 3 && $objetivo == 2):
        $rangoKcalMin = $pesoLb * 16;
        $rangoKcalMax = $pesoLb * 18;
        break;
    case ($actividad == 3 && $objetivo == 3):
        $rangoKcalMin = $pesoLb * 20;
        $rangoKcalMax = $pesoLb * 22;
        break;
}

switch ($biotipo) {
    case (1):
        $carbohidratosMin = $rangoKcalMin * 0.5 / 4;
        $proteinasMin = $rangoKcalMin * 0.25 / 4;
        $grasaMin = $rangoKcalMin * 0.2 / 9;

        $carbohidratosMax = $rangoKcalMax * 0.5 / 4;
        $proteinasMax = $rangoKcalMax * 0.25 / 4;
        $grasaMax = $rangoKcalMax * 0.2 / 9;
        break;
    case (2):
        $carbohidratosMin = $rangoKcalMin * 0.4 / 4;
        $proteinasMin = $rangoKcalMin * 0.3 / 4;
        $grasaMin = $rangoKcalMin * 0.3 / 9;

        $carbohidratosMax = $rangoKcalMax * 0.4 / 4;
        $proteinasMax = $rangoKcalMax * 0.3 / 4;
        $grasaMax = $rangoKcalMax * 0.3 / 9;
        break;
    case (3):
        $carbohidratosMin = $rangoKcalMin * 0.25 / 4;
        $proteinasMin = $rangoKcalMin * 0.4 / 4;
        $grasaMin = $rangoKcalMin * 0.35 / 4;

        $carbohidratosMax = $rangoKcalMax * 0.25 / 4;
        $proteinasMax = $rangoKcalMax * 0.4 / 4;
        $grasaMax = $rangoKcalMax * 0.35 / 4;
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cálculo de Calorías</h1><br>
    <p>Dietética y Nutrición</p><br>
    <p><b>Peso en KGs: </b> <?php echo $pesoKg; ?></p>
    <p><b>Peso en libras: </b> <?php echo $pesoLb; ?></p>
    <p><b>Rango Kcal: </b> <?php echo $rangoKcalMin; ?> / <?php echo $rangoKcalMax; ?></p>

    <p>Distribucion de Macronutrientes</p>
    <ul>
        <li>
            <p>Gramos de carbohidratos: <?php echo $carbohidratosMin; ?> / <?php echo $carbohidratosMax; ?> </p>
        </li>
        <li>
            <p>Gramos de proteinas: <?php echo $proteinasMin; ?> / <?php echo $proteinasMax; ?></p>
        </li>
        <li>
            <p>Gramos de grasa: <?php echo $grasaMin; ?> / <?php echo $grasaMax; ?></p>
        </li>
    </ul>
</body>

</html>