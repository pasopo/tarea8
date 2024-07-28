<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      
</head>
<body>
    
    <center>
        <form action="procesar_datos.php" method="post"> 
            <h1>Reserva tu vuelo</h1>
            <input type="text"  name="origen" placeholder="Origen" value="" required/><br>
            <input type="text" name="destino" placeholder="Destino" value="" required/><br>
            <input type="text" name="pasajeros" placeholder="Pasajeros" value="" required/><br>
            <input type="text" name="aerolinea" placeholder="Aerolinea" value="" required/><br>
            <input type="text" name="vuelo" placeholder="Vuelo" value="" required/><br>
            <input type="date" name="ida" placeholder="Ida" value="" required/><br>
            <input type="date" name="regreso" placeholder="Regreso" value="" required/><br>

            <h1>Reserva tu Hotel</h1>
            <input type="text" name="nombre_hotel" placeholder="Nombre del Hotel" value="" required/><br>
            <input type="text" name="direccion_hotel" placeholder="Dirección del Hotel" value="" required/><br>
            <input type="text" name="tipo_habitacion" placeholder="Tipo de Habitación" value="" required/><br>
            <input type="text" name="cantidad_habitaciones" placeholder="Cantidad de Habitaciones" value="" required/><br>
            <input type="text" name="precio_habitacion" placeholder="Precio de la Habitación" value="" required/><br>
            <input type="date" name="dia_ingreso" placeholder="Día de ingreso" value="" required/><br>
            <input type="date" name="dia_salida" placeholder="Día de Salida" value="" required/><br>
    <tr>
        <td><button class="btn btn-success mt-3" name="btn1" type="submit">Confirmar</button></td>
        <td><button class="btn btn-info mt-3" name="btn2" type="submit">Consultar</button></td>
        <td><button class="btn btn-primary mt-3" name="btn3" type="submit">Modificar</button></td>
                <td><button class="btn btn-primary mt-3" name="btn4" type="reset">Cancelar </button></td>
    </tr>

<?php
if(isset($_POST["btn2"]))
{
    include("consultar_clientes.php"); 
}
 
if(isset($_POST["btn3"]))
{
    include("modificar_datos.php");
}
if(isset($_POST["btn4"]))
{
    include("eliminar_clientes.php"); 
}

?>


        </form>
    </center>
</body>
</html>