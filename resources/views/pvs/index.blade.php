<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>ProVisions Systems</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta property="og:title" content="ProVisions Systems" />
  <meta property="og:url" content="provisionssystems.com" />
  <meta property="og:image" content="provisionssystems.com/img/PVS.jpg" />
  <meta property="og:description" content="ProVisions Systems. Somos personas comprometidas con nuestros clientes, para apoyar y gestionar en materia de informática.">

  <meta name="keywords" content="ProVisions, provisions, ProVisions Systems, provisions systems, desarrollo,software">

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/PVS1.png">
  
</head>
<body>

  <div class="container-fluid menunav"> <!-- CONTAINER DEL MENU-->
    <nav class="navbar navbar-expand-lg navbar-light colornav ">
      <a class="navbar-brand" href="../"><img class="mt-1" src="img/PVS1.png" id="logo" width="220px" height="130px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="botonmenu">
        <span class="navbar-toggler-icon img-fluid d-sm-block"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link mr-5 linkmenu" href="/">Home </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-5 linkmenu " href="#">Quienes somos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-5 linkmenu " href="/invitations">Invitaciones</a>
          </li>
        </ul>
      </div>
    </nav> 
  </div> <!-- fin contaier menu-->

<div class="container-fluid mt-2 "> <!-- Silider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/slider1.jpg" alt="First slide" height="500px">
         <div class="carousel-caption">
            <h1 class="textoslider">Profesionales en software</h1>
            <h4 class="textoslider">Tenemos amplia vision en tecnologias de desarrollo</h4>
         </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide" height="500px">
        <div class="carousel-caption">
            <h1 class="textoslider">Quienes somos</h1>
            <h4 class="textoslider">Somos una empresa dedicada al desarrollo de tecnologías de software para automatizar e innovar a traves de un sistema y así resolver sus necesidades</h4>
         </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide" height="500px">
        <div class="carousel-caption ">
            <h1 class="textoslider">Nuestro objetivo es</h1>
            <h4 class="textoslider">Crear e implementar soluciones a partir del desarrollo de software con la finalidad de facilitar procesos y actividades.</h4>
         </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>  <!-- Fin Slider--> 
  
  <div class="container-fluid seccion1 "> <!-- CONTAINER SECCION 1-->
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-xm-2">
          <h3 class="display-3 titleSect1"> En ProVisions</h3>
        </div>
      </div>
      <p class="lead textsection1"> Somos profesionales con una amplia vision sobre tecnologias de desarrollo de software ya que creamos soluciones a partir de sus problemas. </p>
      <hr class="linesection1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 d-flex justify-content-around">
            <figure class="figure">
              <img src="img/icono.svg" class=" sizeimage img-fluid mt-5" alt="">
              <figcaption class="figure-caption mt-4">Creamos Soluciones</figcaption>
            </figure>
            <figure class="figure">
              <img src="img/icono1.svg"  class=" sizeimage img-fluid mt-5" alt="">
              <figcaption class="figure-caption mt-4">Mejoramos Procesos</figcaption>
            </figure>
            <figure class="figure">
              <img src="img/icono2.svg"  class=" sizeimage img-fluid mt-5" alt="">
              <figcaption class="figure-caption mt-4">Aumentamos Rendimiento</figcaption>
            </figure>
        </div>        
        </div>
      </div>  
    </div> <!-- FIN CONTAINER SECCION 1-->
  

  <div class="container-fluid margen seccion2"> <!-- CONTAINER SECCION 2-->
    <h3 class="mt-4 ml-2 textoslider">Te escuchamos, creamos y solucionamos. Contactenos</h3> 
    <div class="row ml-2">
      <div class="col-md-4 col-xs-12" >
        <div class="formSec2 d-flex justify-content-center">
            <form action="proceso.php" method="POST" class="form-group">
               <label for="validationTooltip01">Nombre</label>
                <input type="text" class="form-control inputCont" name="nombre"  required autocomplete="off">
            
                <label  class="mt-3" for="validationTooltip01 ">Email</label>
                <input type="text" class="form-control inputCont" name="email" required autocomplete="on"> 
          
                <label  class="mt-3" for="validationTooltip01">Telefono</label>
                <input type="text" class="form-control inputCont" name="telefono"  required autocomplete="off"> 
              
                <label class="mt-3" for="validationTooltip01">Mensaje</label>
                <textarea cols="30" rows="8" class="formTexta form-control" name="mensaje"></textarea> <br>
                <input class="btn btn-outline-light buttonForm" type="submit" name="" value="Enviar">            
            </form>
        </div>
      </div>
        <div class="col-md-7 offset-1 d-none d-sm-block d-xs-none">
          <img id="pvslogo" class="imgSec2" src="img/PVS1.png" height="350px" width="600px">  
        </div>
    </div> 
  </div> <!-- FIN CONTAINER 2-->

  <div class="container-fluid footerpvs">  
    <footer class="blockquote text-center">
      <div class="row">
        <div class="col-md-11">
          <p class="text-uppercase mt-5 text-center"> <b> ProVisions Systems </b> &copy; </p>
          <p class="textfoot"> Todos los derechos reservados</p>
        </div>      
      </div>
     <hr class="lineafoot">
      <div class="row">
        <div class="col-4">
           <a href="https://www.facebook.com/ProVisionsSystems" target="_blank">
            <i class="fab fa-facebook-f iconsf d-sm-inline mt-3 "></i>
          </a>
        </div>
        <div class="col-4">
           <a href="https://www.twitter.com/ProVisionsSyst" target="_blank">
            <i class="fab fa-twitter  iconsf d-sm-inline img-fluid mt-3 "></i>
           </a>
        </div>
        <div class="col-4">
         <a href="https://www.youtube.com" target="_blank">
           <i class="fab fa-youtube iconsf d-sm-inline img-fluid mt-3"></i>
         </a>
        </div>
      </div>
    
   
    </footer>
  </div>
  
  <script src="js/jquery.js" ></script> 
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/all.js"></script> 
</body>
</html>
