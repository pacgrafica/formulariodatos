<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juan López - Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- ESTA ES LA TIPOGRAFIA DE TITULOS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top fondoColor" id="arriba">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="images/jlopezLogo.png" alt="Juan Francisco López Diseñador Fullstack">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="quiensoy.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quien soy
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="quiensoy.html">Perfil</a></li>
                  <li><a class="dropdown-item" href="#">Habilidades</a></li>
                  <li><a class="dropdown-item" href="#">Mi fuerte</a></li>
                  <li><a class="dropdown-item" href="#">Educación</a></li>
                  <li><a class="dropdown-item" href="#">Experiencia</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="proyectos.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Proyectos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item " href="proyectos.html">Multimedia</a></li>
                  <li><a class="dropdown-item " href="#">Imagen</a></li>
                  <li><a class="dropdown-item " href="#">Audio</a></li>
                  <li><a class="dropdown-item " href="#">Video</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="galeria.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Galería
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="galeria.html">Multimedia</a></li>
                  <li><a class="dropdown-item" href="#">Trabajos Recientes</a></li>
                  <li><a class="dropdown-item" href="#">Clientes</a></li>
                  <li><a class="dropdown-item" href="#">Experiencias</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active2" href="contacto.html">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">Contacto</h1>
            <p class="lead">Estoy muy feliz de recibir tus comentarios y/o observaciones, recuerda que me encuentras en el ciberespacio como jlopez Fullstack Designer</p>
            <div class="d-grid gap-2 d-md-flex mb-4 mb-lg-3">
            <h1 class="text-center" style="color: #E0E153;">  
            <?php

            if (isset($_POST['nombre']) && isset($_POST['celular'])) {
                $nombre = $_POST['nombre'];
                $celular = $_POST['celular'];

                $para = "pacinteractiva@gmail.com";
                $asunto = "Nuevo mensaje desde Contacto jlopez";
                $mensaje = "Nombre: " . $nombre . "\nCelular: " . $celular;
                $cabeceras = "From: pacinteractiva@gmail.com" . "\r\n" .
                    "Reply-To: pacinteractiva@gmail.com" . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();

                mail($para, $asunto, $mensaje, $cabeceras);

                echo "Mensaje enviado correctamente";
            }

            ?></h1>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-0 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3 animate__animated animate__slideInUp" src="images/juan1.png" alt="" width="280">
        </div>
        </div>
      </div>

      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item p-1 rounded-2"><a href="#">Home</a></li>
            <li class="breadcrumb-item p-1 rounded-2"><a href="#">Proyectos</a></li>
            <li class="breadcrumb-item active2 p-1 rounded-2" aria-current="page" style="font-family: 'Pacifico', cursive; font-size: 20px;">Contacto</li>
          </ol>
        </nav>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="caja2">
            <h3>No hay genios individuales si no sociedades enteras y en marcha que potencian a los más inteligentes e imaginativos para que alimenten esa marcha</h3>
            <p>Julio Verne</p>
          </div>
        </div>
      </div>

     

        

    <script src="js/jquery-3.6.1.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
      const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
      const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
  </body>
</html>
