<?php
session_start();
include_once "conexion.php";

// Obtener los datos del formulario
$producto_id = $_POST['producto_id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Crear o actualizar la sesión del carrito
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Agregar el producto al carrito
$producto = array(
    'producto_id' => $producto_id,
    'nombre' => $nombre,
    'precio' => $precio,
    'cantidad' => $cantidad
);
array_push($_SESSION['carrito'], $producto);

// Redirigir de vuelta a la página anterior
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
?>