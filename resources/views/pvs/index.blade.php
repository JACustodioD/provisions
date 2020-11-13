@extends('pvs.complements.template')

@section('title','ProVisions Systems')

@section('content')

@include('pvs.complements.sectionBanner')
    
<section class="section-develop shadow-sm p-3 mb-1 bg-white rounded">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12 col-sm-12">
        <h1 class="develop-h1 animate">Creamos soluciones a partir de sus necesidades</h1>
        <hr style="width: 25%; background-color: #a5d936; height: 3px;">
        <p class="develop-text">En Provisions, lo más importante es escucharte para así entender
          cuál es la necesidad de software que tu empresa necesita.
          <span>Encontrarás la atención que te mereces y la solución que estás buscando.</span>
          Somos pequeños emprendedores con ganas de ayudarte a crecer.
          Acércate a nosotros, encontraremos la solución.
        </p>
        
      </div>
      <div class="col-md-6 text-center">
        <img src="/pvs/img/desarrollo1.png" class="image-develop animate d-md-block img-fluid"  height="450">
      </div>
    </div>
    <div class="section-develop-two">
    <div class="row">
      <div class="col-md-6">
        <img src="/pvs/img/desarrollo2.png" class="animate1 d-none d-md-block img-fluid" height="500">
      </div>
      <div class="col-md-6 col-xs-12 col-sm-12">
        <h1 class="develop-h1 animate1">Desarrollamos a la medida</h1>
          <hr style="width: 25%; background-color: #a5d936; height: 3px;">
          <p class="develop-text">En Provisions, <span>trabajamos con metodologías que agilicen los procesos</span>
            de acuerdo a lo que realizamos, así nuestros clientes estarán en 
            conjunto con nosotros visualizando el avance de su proyecto. Nuestro compromiso es 
            hacer realidad lo que necesita en su empresa.
          </p>
          <div class="col-md-6 text-center">
            <img src="/pvs/img/desarrollo2.png" class=" image-develop animate1 d-md-none img-fluid">
          </div>
          <div class="text-center">
          <a href="" class="nav-link blue-btn hvr-push">Contáctanos ahora</a>
        </div>
        </div>
       
        
      </div>
    </div>
  </div>
</section>

@include('pvs.complements.benefits')

<section class="services shadow-sm bg-white ">
  <div class="container">
    <div class="row d-flex justify-content-end text-center" >
      <div class="col-md-7 col-lg-6 p-5 services-padding  back-services" style="background-color:white; height:700px;">
        <h1 class=" work-h1 animate_project">Aplicaciones web y software a la medida</h1>
        <hr style="width: 25%; background-color: #a5d936; height: 3px; margin-bottom: 30px;">
        <img src="/pvs/img/icono.png" alt="icono" height = "150">
        <p class="text-services mt-4">Desarrollamos software  totalmente personalizado y a la medida en su empresa,
          para simplificar y automatizar el manejo de toda su información.
          Con ello sus procesos serán más fáciles y eficientes
        </p>
        <a href="" class="nav-link green-btn hvr-push">Solicitar más información</a>
      </div>
    </div>
 </div>
</section>
<section class="services2 shadow-sm bg-white">
  <div class="container">
    <div class="row d-flex justify-content-start text-center" >
      <div class="col-md-7 col-lg-6 p-5 services-padding services-padding2 back-services" style="background-color:white; height:700px;">
        <h1 class=" work-h1 animate_services">Landing pages y posicionamiento web</h1>
        <hr style="width: 25%; background-color: #0064de; height: 3px; margin-bottom: 30px;">
        <img src="/pvs/img/icono2.png" alt="icono" height = "150">
        <p class="text-services mt-4">No es suficiente tener un software que automatice tus procesos.
          El siguiente paso es atraer clientes y mostrar específicamente tus productos.
          Todo ello es posible con una Landing Page y con un buen posicionamiento web SEO-SEM.
          En Provisions lo hacemos realidad.
        </p>
        <a href="" class="nav-link blue-btn hvr-push">Solicitar más información</a>
      </div>
    </div>
 </div>
</section>
<section class="idea-section shadow-sm p-3 mb-5 bg-white">
  <div class="container text-center mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <h1 class="h1-ideology">¿Tienes alguna idea?</h1>
        <hr style="width: 25%; background-color: #a5d936; height: 3px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h4 class="h4-idea">Si tienes en mente algún proyecto, acércate a nosotros, te ayudaremos a hacerlo realidad
          con nuestro equipo de trabajo.
        </h4>
        <a href="" class="nav-link green-btn hvr-push">Contáctanos ahora</a>
      </div>
    </div>
  </div>
  
</section>
<section class="frases-section shadow-sm p-3  bg-white">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1 class="h1-ideology">Nuestra ideología es importante</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
            <h2 class=" t-frases d-block w-100"> <strong>“</strong> No hemos sido los primeros, pero seremos los mejores. <strong>”</strong></h2>
            <h5>-Steve Jobs.</h5>
          </div>
          <div class="carousel-item">
            <h2 class="t-frases d-block w-100"> <strong>“</strong> Muchas cosas son improbables, solo unas pocas son imposibles. <strong>”</strong></h2>
            <h5>-Elon Musk.</h5>
          </div>
          <div class="carousel-item">
            <h2 class="t-frases d-block w-100"> <strong>“</strong> Ama tu visión y tus sueños como si fueran los hijos de tu alma, los planos de tus logros finales. <strong>”</strong></h2>
            <h5>-Napoleon Hill.</h5>
          </div>
          <div class="carousel-item">
            <h2 class="t-frases d-block w-100"> <strong>“</strong> Precio es lo que pagas, valor es lo que recibes. <strong>”</strong></h2>
            <h5>-Warren Buffet.</h5>
          </div>
          <div class="carousel-item">
            <h2 class="t-frases d-block w-100"> <strong>“</strong> Los ganadores no tienen miedo de perder, los perdedores sí lo tienen. Fracasar es parte del proceso del éxito. <strong>”</strong></h2>
            <h5>-Robert Kiyosaki.</h5>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>
</section>
@endsection