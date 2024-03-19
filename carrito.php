<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>

<?php
session_start();
include_once "conexion.php";

// Verificar si hay productos en el carrito
if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    // Mostrar los productos del carrito
    foreach ($_SESSION['carrito'] as $producto) {
        echo "<div class='container'>";
        echo "<div class='wrapper'>";
        echo "<div class='banner-image2'> </div>";
        echo "<h1>{$producto['nombre']}</h1>";
        echo "<p>{$producto['precio']}<br />";
        echo "Precio: $" . $producto['precio'] . "<br />";
        echo "Cantidad: " . $producto['cantidad'] . "</p>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "<p>No hay productos en el carrito.</p>";
}
?>

</body>
</html>
