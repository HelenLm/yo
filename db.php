<?php
$servername = "cuentas.mysql.database.azure.com"; // Nombre de tu servidor MySQL en Azure
$username = "cuentas"; // Tu nombre de usuario de MySQL
$password = "Abrilonce-11"; // Tu contraseña de MySQL
$dbname = "streaming_sales"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
