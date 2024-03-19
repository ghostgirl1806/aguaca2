<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuario</title>
</head>
<body>
  <h2>Registro de Usuario</h2>
  <form action="registro_procesar.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br>
    <label for="email">Correo electrónico:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Registrarse</button>
  </form>
</body>
</html>
