<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

require 'config.php';

$query = "SELECT * FROM alumnos";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
        <h3>Lista de Alumnos</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Dirección</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['fecha_nacimiento']; ?></td>
                        <td><?php echo $row['direccion']; ?></td>
                        <td><?php echo $row['nota']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
