<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="inicio_sesion.css">
  <script type="module" src="https://unpkg.com/@splinetool/viewer@1.0.66/build/spline-viewer.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">

</head>

<body>
  <div class="header_logo">
    <img width="150" src="AvocadoJA_transparent.png">
  </div>
  <div class="body-background">
    <spline-viewer url="https://prod.spline.design/iSRQHTGodK0B1lKQ/scene.splinecode"></spline-viewer>
  </div>
  <section class='login' id='login'>
    <div class='head'>
      <h1 class='company'>¡Ingresa Admin!</h1>
    </div>
    <p class='msg'>Bienvenido, estas de vuelta</p>
    <div class='form'>
      <form action="iniciarSesion.php" method="post">
        <input type="text" name="email" placeholder='Correo electronico' class='text' id='email' required><br>
        <input type="password" name="password" placeholder='Contraseña' class='password'><br>
        <p>¿No tienes una cuenta? <a class="forgot" href="registro.php">Regístrate aquí</a>.</p>
        <button class='btn-login' id='do-login'>Iniciar</button>
      </form>
    </div>
  </section>
</body>

</html>