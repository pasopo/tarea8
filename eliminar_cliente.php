<?php
// Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
$conn = mysqli_connect("localhost", "root", "", "mundotour");
// Verificar la conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
// Obtener el ID del cliente a eliminar
$nombre_hotel = $_POST['nombre_hotel'];
// Consulta para eliminar un cliente de la base de datos
$sql = "DELETE FROM hotel WHERE nombre_hotel=$nombre_hotel";
if ($conn->query($sql) === TRUE) {
echo "Cliente eliminado correctamente";
} else {
echo "Error al eliminar el cliente: " . $conn->error;
}
// Cerrar la conexión a la base de datos
$conn->close();
?>