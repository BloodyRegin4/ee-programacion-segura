<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="estilos.css">
    <script defer src="login.js"></script>
</head>
<body>
    <h1>Universidad Veracruzana</h1>
    <h2>Programación Segura</h2>
    <form method="post">
        <h3>Inicio de sesión</h3>
        <label for="email">Correo electrónico</label>
        <input type="text" id="email" name="email"
               placeholder="cuenta@uv.mx">
        <p>Solo se permite el acceso con cuentas UV.</p>
        <span class="text-danger d-none">
            No es un correo válido institucional.
        </span>
        <button id="submit" type="submit">Siguiente</button>
    </form>
</body>
</html>
