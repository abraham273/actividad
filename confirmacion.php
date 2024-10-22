<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reserva</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $restaurante = isset($_POST['restaurante']) ? $_POST['restaurante'] : 'No especificado';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : 'No especificada';
    $personas = isset($_POST['personas']) ? $_POST['personas'] : 'No especificado';

    echo "<h1>Reserva confirmada</h1>";
    echo "<p>Has reservado en el restaurante: <strong>" . htmlspecialchars($restaurante) . "</strong></p>";
    echo "<p>Fecha de la reserva: <strong>" . htmlspecialchars($fecha) . "</strong></p>";
    echo "<p>Número de personas: <strong>" . htmlspecialchars($personas) . "</strong></p>";
} else {
    echo "<p>No se ha recibido ninguna información para confirmar la reserva.</p>";
}
?>

<a href="index.php">Volver al listado de restaurantes</a>

</body>
</html>
