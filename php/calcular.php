<?php

$perimetro = $_POST["peri"];
$apotema = $_POST["apot"];

if(isset($perimetro) &&  isset($apotema) && is_numeric($perimetro) && is_numeric($apotema)){
    $area = ($perimetro * $apotema) / 2;
} else {
    $area = "Solo se permite el ingreso de numeros";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El área es...</title>
</head>

<body>

    <p>El área es de: <?php echo $area; ?></p>
    <br>
    <br>
    <a href="../index.html">Regresar</a>

</body>

</html>