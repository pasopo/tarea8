<?php
include 'global/config.php';
include 'global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MundoTour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">MundoTour</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Carrito(0)</a>
            </li>
        </ul>
    </div>
  </nav>
  <br><br><br>
  <div class="container">
    <br>
    <div class="alert alert-success">
        Pantalla de mensaje...
        <a href="#" class="badge badge-success">Ver Carrito</a>

    </div>
        <div class="row">
            <div class="col-3">
               <div class="card">
                <img
                title="Punta Arenas"
                alt="Título"
                <img class="card-img-top" 
                src="img/puntaarenas.jpg" alt="300">
                <div class="card-body">
                    <span>Disfruta Punta Arenas <br> en modo Invierno</span>
                    <h5 class="card-title">US $1200</h5>
                    <p class="card-text">7 días y 6 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
            <div class="col-3">
               <div class="card">
                <img
                title="Torres del Paine"
                alt="Título"
                <img class="card-img-top" 
                src="img/tpaine.jpg" alt="300">
                <div class="card-body">
                    <span>Cuernos del Paine<br> Tu aventura</span>
                    <h5 class="card-title">US $1600</h5>
                    <p class="card-text">8 días y 7 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
            <div class="col-3">
               <div class="card">
                <img
                title="Viña del Mar"
                alt="Título"
                <img class="card-img-top" 
                src="img/vmar.jpg" alt="300">
                <div class="card-body">
                    <span>Viña del Mar<br>Ciudad Jardín</span>
                    <h5 class="card-title">US $1000</h5>
                    <p class="card-text">5 días y 4 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
            <div class="col-3">
               <div class="card">
                <img
                title="Valparaíso"
                alt="Título"
                <img class="card-img-top" 
                src="img/valpo.jpg" alt="300">
                <div class="card-body">
                    <span>Valparaíso<br>Disfruta el Colorido</span>
                    <h5 class="card-title">US $990</h5>
                    <p class="card-text">5 días y 4 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
            <div class="col-3">
               <div class="card">
                <img
                title="Bariloche"
                alt="Título"
                <img class="card-img-top" 
                src="img/bariloche.jpg" alt="300">
                <div class="card-body">
                    <span>Bariloche<br>Disfrutá del invierno</span>
                    <h5 class="card-title">US $1290</h5>
                    <p class="card-text">7 días y 6 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
            <div class="col-3">
               <div class="card">
                <img
                title="Mendoza"
                alt="Título"
                <img class="card-img-top" 
                src="img/mendoza.jpg" alt="300">
                <div class="card-body">
                    <span>Mendoza<br>Disfrutá Conocer</span>
                    <h5 class="card-title">US $1190</h5>
                    <p class="card-text">5 días y 4 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
            <div class="col-3">
               <div class="card">
                <img
                title="Florianópolis"
                alt="Título"
                <img class="card-img-top" 
                src="img/floriano.jpg" alt="300">
                <div class="card-body">
                    <span>Florianópolis<br>Vive tu sueño</span>
                    <h5 class="card-title">US $1690</h5>
                    <p class="card-text">8 días y 7 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
            <div class="col-3">
               <div class="card">
                <img
                title="Orlando"
                alt="Título"
                <img class="card-img-top" 
                src="img/orlando.jpg" alt="300">
                <div class="card-body">
                    <span>Orlando<br>Vive la magia</span>
                    <h5 class="card-title">US $2290</h5>
                    <p class="card-text">8 días y 7 noches</p>
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
               </div> 
            </div>
        </div>
  </div>
    <script>


    </script>
</body>
</html>