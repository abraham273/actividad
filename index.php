<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Restaurantes</title>
</head>
<body>
    <h1>Selecciona un restaurante</h1>
    
    <?php 
    $restaurantes = [
        "Bar Restaurante Los amigos", 
        "Restaurante El bastinaso", 
        "Restaurante El buen comer", 
        "Restaurante Aquí me quedo"
    ]; 
    ?>
    
    <ul>
        <?php foreach ($restaurantes as $restaurante): ?>
            <li>
                <a href="reserva.php?nombre=<?php echo urlencode($restaurante); ?>">
                    <?php echo htmlspecialchars($restaurante); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>


