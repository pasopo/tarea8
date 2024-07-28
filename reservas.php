<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes Mundo Tour</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de Clientes</title>

</head>
<body>
    <header>
        <a href="#" class="logo">
        <span>Mundo</span>Tour</a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
        <nav class="navbar">
            <a href="index.html"  target="_blank">inicio</a>
            <a href="#pasajes.html" target="_blank">pasajes</a>
            <a href="reservas.html" target="_blank">reservas</a>
            <a href="#opiniones.html" target="_blank">opiniones</a>
            <a href="#galeria.html" target="_blank">galería</a>
            <a href="#formularios.html" target="_blank">contactos</a>
        </nav>
    </header>
    <br><br><br><br><br><br><br><br>

<center><nav class="gale">
<td><img src="img/bus.png" width=250 height=170></td>
<td><img src="img/avion.png" width=250 height=150></td>  
<td><img src="img/tren.png" width=250 height=140></td>  
<td><img src="img/barco.png" width=220 height=140></td>  
</nav>
</center>
    <div id="marquesina"></div>

    <div class="titulo" id="h3">
        <h1>En Mundo Tour tu viaje comienza hoy</h1>
        
        <h3>Decide tu destino - elige tu fecha - busca tu viaje</h3>
    </div>
    <center><table>


        <h1>Reserva tu vuelo</h1><br>
   
        <form action="procesar_datos.php" method="post" /> 
    
        <table border='2' align='center'>
            
    <tr><td><label for="origen">Origen:</label></td></tr>
    <tr><td><input type="text" id="" name="origen" required></td></tr>
    <tr><td><label for="destino">Destino:</label></td>
    </tr><td><input type="text" id="" name="destino" required></td></tr>
    <tr><td><label for="fecha_ida">Fecha de ida</label></td></tr>
    <tr><td><input type="date" id="e" class="form-control my-2" type="date"></td></tr>
    <tr><td><label for="fecha_regreso">Fecha de regreso</label></td></tr>
    <tr><td><input type="date" id="e" class="form-control my-2" type="date"></td></tr>
    <tr><td><label for="id_vuelo">vuelo:</label></td></tr>
    <tr><td><input type="text" id="" name="id_vuelo" required></td></tr>
    <tr><td><label for="plazas_disponibles">cantidad de pasajeros</label></td></tr>
    <tr><td><input type="text" id="" name="plazas_disponibles" required></td><tr>
    <tr><td><label for="precio">precio</label></td></tr>
    <tr><td><input type="text" id="" name="precio" required></td><tr>
<table></center><br>        
<center><table><br>
        <h1>Reserva tu hotel</h1><br>
    <tr><td><label for="id_reserva">Código de reserva:</label></td></tr>
    <tr><td><input type="text" id="" name="id_reserva" required></td></tr>
    <tr><td><label for="id_vuelo">Código Hotel:</label></td></tr>
    <tr><td><input type="text" id="" name="id_vuelo" required></td></tr>
    <tr><td><label for="id_hotel">Código Hotel:</label></td></tr>
    <tr><td><input type="text" id="" name="id_hotel" required></td></tr>
    <tr><td><label for="id_cliente">N° de Pasaporte:</label></td></tr>
    <tr><td><input type="text" id="" name="id_cliente" required></td></tr>
    <tr><td><label for="nombre_hotel">Nombre Hotel:</label></td></tr>
    <tr><td><input type="text" id="" name="nombre_hotel" required></td></tr>
    <tr><td><label for="ubicacion">Ubicación:</label></td></tr>
    <tr><td><input type="text" id="" name="ubicacion" required></td></tr>
    <tr><td><label for="habitaciones_disponibles">habitación:</label></td></tr>
    <tr><td><input type="text" id="" name="habitaciones_disponibles" required></td></tr>
    <tr><td><label for="tarifa_noche">tarifa por noche:</label></td></tr>
    <tr><td><input type="text" id="" name="tarifa_noche" required></td></tr> 
</table><br>
<table><br>
        <h1>Ingresa tus datos</h1> <br>
    <tr><td><label for="id_cliente">pasajero:</label></td></tr>
    <tr><td><input type="text" id="" name="id_cliente" required></td></tr>
    <tr><td><label for="id_cliente">pasajero:</label></td></tr>
    <tr><td><input type="text" id="" name="id_cliente"></td></tr>
    <tr><td><label for="id_cliente">pasajero:</label></td></tr>
    <tr><td><input type="text" id="" name="id_cliente"></td></tr> 
</table><br>

    <tr>
        <td><button class="btn btn-primary mt-3" type="submit">Confirmar</button></td>
        <td><button class="btn btn-primary mt-3" type="submit">Modificar</button></td>
        <td><button class="btn btn-primary mt-3" type="submit">Consultar</button></td>
        <td><button class="btn btn-primary mt-3" type="reset">Cancelar </button></td>
        
        
        </tr>
</form-->
<?php
include("conectar.php");
include("procesar_datos.php");
include("modificar_datos.php");
include("consultar_clientes.php");
include("eliminar_clientes.php");
?>
</table>
</center>
<br><br><br><br><br>
<footer>
    <h3 align="center">Visitanos en nuestras redes sociales</h3><br><br>
<center><table>
        <tr>
            <td width=10% align="center"><a href="https://www.whatsapp.com/" target="_blank"><img src="img/wassaplogo.png" width="100" height="100"></td>
            <td width=10% align="center"><a href="https://www.tiktok.com/" target="_blank"><img src="img/tiktoklogo.png" width="100" height="100"></a></td>
            <td width=10% align="center"><a href="https://www.instagram.com/" target="_blank"><img src="img/instagramlogo.png" width="100" height="100"></a></td>
            <td width=10% align="center"><a href="mailto:mundotour@mundo.com/" target="_blank"><img src="img/correo.png" width="100" height="100"></a></td>
            <td width=10% align="center"><a href="https://web.facebook.com/" target="_blank"><img src="img/facebooklogo.png" width="100" height="100"></a></td>
        </tr>
</table>
</center>
</footer>

    <script src="viaje.js"></script>
</body>

</html>
