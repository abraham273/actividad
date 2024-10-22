<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Mesa</title>
</head>
<body>

<?php
$nombreRestaurante = isset($_GET['nombre']) ? $_GET['nombre'] : '';
?>

<h1>Formulario de Reserva</h1>

<form action="confirmacion.php" method="POST">
    <label for="restaurante">Nombre del Restaurante:</label>
    <input type="text" id="restaurante" name="restaurante" 
            value="<?php echo htmlspecialchars($nombreRestaurante); ?>" 
            <?php echo $nombreRestaurante ? 'readonly' : ''; ?>>
    <br><br>

    <label for="fecha">Fecha de la Reserva:</label>
    <input type="date" id="fecha" name="fecha" required>
    <br><br>

    <label for="personas">Número de Personas:</label>
    <input type="number" id="personas" name="personas" min="1" max="20" required>
    <br><br>

    <input type="submit" value="Reservar">
</form>

</body>
</html>


