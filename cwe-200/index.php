<?php
session_start();

if (!isset($_SESSION['codigo'])) {
    echo "<p>No tiene permiso de ver esta página.
          <a href='login.php'>Iniciar sesión</a></p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página protegida</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Sitio protegido — UV</h1>
    <h2>Programación segura</h2>
    <p>Bienvenido a este sitio protegido por correo electrónico
       y un código de acceso.</p>
    <a href="login.php">Cerrar sesión</a>
</body>
</html>
