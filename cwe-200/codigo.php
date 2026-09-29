<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (($_POST['codigo'] ?? '') === '7824') {
        $_SESSION['codigo'] = $_POST['codigo'];
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Código de acceso</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Universidad Veracruzana</h1>
    <h2>Programación Segura</h2>
    <form method="post">
        <label for="codigo">Código de seguridad</label>
        <input type="text" id="codigo" name="codigo"
               placeholder="Escriba el código de seguridad">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <p class="text-danger">Código incorrecto</p>
        <?php endif; ?>
        <a href="login.php">Regresar</a>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
