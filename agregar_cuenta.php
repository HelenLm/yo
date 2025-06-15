<?php
include('db.php'); // Incluir el archivo de conexión

// Recoger los datos del formulario
$comprador_nombre = $_POST['comprador_nombre'];
$plataforma = $_POST['plataforma'];
$tipo = $_POST['tipo'];
$nombre_pantalla = isset($_POST['nombre_pantalla']) ? $_POST['nombre_pantalla'] : null;
$fecha_venta = $_POST['fecha_venta'];
$fecha_fin = $_POST['fecha_fin'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$precio = $_POST['precio'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO cuentas (comprador_nombre, plataforma, tipo, nombre_pantalla, fecha_venta, fecha_fin, correo, contrasena, precio) 
        VALUES ('$comprador_nombre', '$plataforma', '$tipo', '$nombre_pantalla', '$fecha_venta', '$fecha_fin', '$correo', '$contrasena', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Cuenta registrada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
