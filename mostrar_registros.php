<?php
include('db.php'); // Incluir el archivo de conexión

$sql = "SELECT * FROM cuentas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='cuenta'>";
        echo "<p><strong>Comprador:</strong> " . $row['comprador_nombre'] . "</p>";
        echo "<p><strong>Plataforma:</strong> " . $row['plataforma'] . "</p>";
        echo "<p><strong>Tipo:</strong> " . $row['tipo'] . "</p>";
        if ($row['tipo'] == 'individual') {
            echo "<p><strong>Nombre de la Pantalla:</strong> " . $row['nombre_pantalla'] . "</p>";
        }
        echo "<p><strong>Fecha de Venta:</strong> " . $row['fecha_venta'] . "</p>";
        echo "<p><strong>Fecha de Fin:</strong> " . $row['fecha_fin'] . "</p>";
        echo "<p><strong>Correo:</strong> " . $row['correo'] . "</p>";
        echo "<p><strong>Precio:</strong> $" . $row['precio'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay registros.";
}

$conn->close();
?>
