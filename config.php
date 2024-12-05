<?php
$conn = new mysqli('localhost', 'root', '', 'baseuniversidad');

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

