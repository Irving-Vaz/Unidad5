<?php
$anio = $_POST['anio'];

$opereacion_elemento = ($anio - 4) % 10;


switch ($opereacion_elemento) {
    case 0:
    case 1:
        $elemento = "Madera";
        $icono   = "madera.png";
        
        break;
    case 2:
    case 3:
        $elemento = "Fuego";
        $icono  = "fuego.jpg";
        break;
    case 4:
    case 5:
        $elemento = "Tierra";
        $icono   = "tierra.webp";
        break;
    case 6:
    case 7:
        $elemento = "Metal";
        $icono   = "metal.webp";
        break;
    case 8:
    case 9:
        $elemento = "Agua";
        $icono   = "agua.jpg";
        break;
        
}
?>














<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="info.css">
    
</head>
<body>
<div class="caja">
    <h2>AÑo <?= $anio ?></h2>
    <h1><?= $elemento ?></h1>
    <img src="imagenes/<?= $icono ?>" alt="<?= $elemento ?>">
    <p>este año pertenece al elemento:</p>
    <h1><?= $elemento ?></h1>
</div>
</body>
</html>