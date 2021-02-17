<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180797871-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180797871-1');
</script>

  
  <title>@yield('title')</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta property="og:title" content="ProVisions Systems" />
  <meta property="og:url" content="https://provisionssystems.com/" />
  <meta property="og:image" content="https://provisionssystems.com/pvs/img/icon.jpg" />
  <meta property="og:description" content="En Provisions, lo más importante es escucharte para así entender cuál es la necesidad de software que tu empresa necesita. Encontrarás la atención que te mereces y la solución que estás buscando. Somos pequeños emprendedores con ganas de ayudarte a crecer. Acércate a nosotros, encontraremos la solución.">

  <meta name="keywords" content="ProVisions, provisions, ProVisions Systems, provisions systems, desarrollo,software, empresa de software,consultora de software,desarrollo de software">

  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="
  
  
  sheet"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link rel="stylesheet" href="/pvs/css/index.css">
  <link rel="stylesheet" href="/pvs/css/contacto.css">
  <link rel="stylesheet" href="/pvs/css/responsiveindex.css">
  <link rel="stylesheet" href="/pvs/css/hover.css">
  @yield('css')
  
  <link rel="shortcut icon" type="image/x-icon" href="/pvs/img/icon.jpg">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  
</head>
<body>

@yield('content')
<div class="">
  <span class="botoncito"><i class="fas fa-angle-double-up"></i></span>
</div>
<!--MODAL CONTACTO-->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      
      <div class="row">
         <div class="col-md-12 col-sm-12" style="background-color: white">
            <form class="contact-form" action="/contact" method="POST" autocomplete="off">
               @csrf
               <h2>contácto</h2>
               <div class="input-div">
                  <div class="i">
                     <i class="far fa-envelope"></i>
                  </div>
                  <div>
                     <h5>Correo electronico:</h5>
                     <input class="input" type="email" name="email" >
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="fas fa-user"></i>
                  </div>
                  <div>
                     <h5>Nombre:</h5>
                     <input class = "input" type="text" name="nombre" >
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="far fa-building"></i>
                  </div>
                  <div>
                     <h5>Empresa:</h5>
                     <input class = "input" type="text" name="empresa" >
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="fas fa-mobile-alt"></i>
                  </div>
                  <div>
                     <h5>Teléfono:</h5>
                     <input class = "input" type="text" name="telefono"  maxlength="10" minlength="10">
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="far fa-sticky-note"></i>
                  </div>
                  <div>
                     <h5>Mensaje:</h5>
                     <textarea name="mensaje" class="input" cols="20" rows="30"></textarea>
                  </div>
               </div>
               <div class="terms-div">
               </div>
               <br> 
               <button class="blue-btn mb-4  hvr-push" id="blue-btn-contact" type="submit">Enviar</button>  
             </form>
         </div>
      </div>
    </div>
  </div>
</div>


  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="/pvs/js/all.js"></script>  
  <script src="/pvs/js/efectos.js"></script> 
  <script src="/pvs/js/jquery.js"></script> 
  <script src="/pvs/js/contact.js"></script>
  <script src="/pvs/js/boton.js"></script>
  <script src="/pvs/js/sticky.js"></script>
  
  @yield('script')
  </body>
  </html>
  