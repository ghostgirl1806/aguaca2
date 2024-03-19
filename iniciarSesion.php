<?php
session_start();

include_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Buscar al usuario en la base de datos por su correo electrónico
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Usuario encontrado, verificar contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['contraseña'])) {
            // Contraseña correcta, iniciar sesión y redirigir al usuario
            $_SESSION['usuario_id'] = $row['id'];
            header("Location: productos.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado.";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
