<?php
session_start();

if (isset($_POST['login'])) {
    require 'config.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Inicio de Sesion
    $query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password';";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: alumnos.php');
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form action="index.php" method="POST">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" require>
            <button type="submit" name="login">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
