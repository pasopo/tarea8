<?php
$conn = mysqli_connect("localhost", "root", "", "mundotour");

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$pasajeros = $_POST['pasajeros'];
$aerolinea = $_POST['aerolinea'];
$vuelo = $_POST['vuelo'];
$ida = $_POST['ida'];
$regreso = $_POST['regreso'];
$nombre_hotel = $_POST['nombre_hotel'];
$direccion_hotel = $_POST['direccion_hotel'];
$tipo_habitacion = $_POST['tipo_habitacion'];
$cantidad_habitaciones = $_POST['cantidad_habitaciones'];
$precio_habitacion = $_POST['precio_habitacion'];
$dia_ingreso = $_POST['dia_ingreso'];
$dia_salida = $_POST['dia_salida'];


// Insertar datos en la base de datos
$sqlvuelo = "INSERT INTO vuelo (origen, destino, pasajeros, aerolinea, vuelo, ida, regreso)
VALUES ('$origen', '$destino','$pasajeros', '$aerolinea','$vuelo','$ida','$regreso')";
$resultado = mysqli_query($conn, $sqlvuelo);


if ($resultado) {
$sqlvuelo = "INSERT INTO hotel (nombre_hotel, direccion_hotel, tipo_habitacion, cantidad_habitaciones, 
precio_habitacion, dia_ingreso, dia_salida) VALUES ('$nombre_hotel', '$direccion_hotel', '$tipo_habitacion',
'$cantidad_habitaciones', '$precio_habitacion', '$dia_ingreso', '$dia_salida')";
    $resultado = mysqli_query($conn, $sqlvuelo);

   echo "Datos ingresados correctamente";
} 
else {
    echo "Error: ";
}
?>