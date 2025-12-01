<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Elemento del Anio</title>  
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="caja">
    <h1>Elemento del Anio</h1>
    <p>Escribe el anio de 4 digitos, para conocer el elemento representativo</p>

    <form action="info.php" method="POST">
        <input type="number" name="anio" min="1000" max="9999" required>
        <br><br>
        <button type="submit">Elemento domiante</button>
    </form>
</div>

</body>
</html>