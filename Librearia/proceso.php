<?php
$libros_retrasados = $_POST['libros'];
$dias_retraso = $_POST['retraso'];
$entrega = $_POST['seleccion']; 

$cuenta = (($libros_retrasados * 5) + (($libros_retrasados * $dias_retraso) * 2));
$Cuenta_total;
if ($entrega == 'SI') {
    $Cuenta_total = $cuenta - ($cuenta * .20);
}else {
    $Cuenta_total = $cuenta;
}

 
echo '<p>Datos de la transaccion:</p>';
echo '<p>- Libros retrasados: ' . $libros_retrasados . '</p>';
echo '<p>- Días de retraso: ' . $dias_retraso . '</p>';
echo '<p>- Entrega completa: ' . ($entrega == 'SI' ? 'SI' : 'NO') . '</p>';
echo '<p>----------------------------------------</p>';

echo '<p> Total de compra $' . $Cuenta_total. '<p>';
?>