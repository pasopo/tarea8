<?php
// Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
$conn = mysqli_connect("localhost", "root", "", "mundotour");
// Verificar la conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
// Consulta para obtener todos los clientes de la base de datos
$sql = "SELECT * FROM vuelo";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
while($fila = $resultado->fetch_assoc()) {
echo " - destino: " . $fila["destino"] . " - aerolinea: " . $fila["aerolinea"] .
"<br>";
}
} else {
echo "No se encontraron clientes";
}
// Cerrar la conexión a la base de datos
$conn->close();
?>