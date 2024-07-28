<?php

$conn = mysqli_connect("localhost", "root", "", "mundotour");
// Verificación de la conexión
if ($conn) {
    echo"Conexión exitosa";
}
else{
    echo"Fallo de conexión: ";
}
?>