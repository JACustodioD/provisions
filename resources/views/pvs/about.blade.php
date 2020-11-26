@extends('pvs.complements.template')

@section('title','Nosotros')

@section('css')
<link rel="stylesheet" href="/pvs/css/contacto.css">
@endsection

@section('content')

    @include('pvs.complements.menu')

    <section class="section-about container shadow-sm p-3 mb-5 bg-white">
        <div class="row">
            <div class="col-md-6">
                <h1 class="about-h1   show-effect-h1 text-center">¿Por qué ProVisions?</h1>
                <hr style="width: 25%; background-color: #a5d936; height: 3px;">
                <p class="about-text">En ProVisions, somos un equipo totalmente comprometido con
                    nuestros clientes, para brindarles la mejor experiencia,
                    garantizando así calidad, y toda la atención que se merecen.
                    Somos un equipo emprendedor, con ganas de ayudarte de igual
                    forma a tomar el camino del éxito. Nuestra garantía de calidad 
                    y satisfacción nos respaldan.
                </p>
            </div>
            <div class="col-md-6">
                <img src="/pvs/img/about-image.png" class="img-fluid  show-effect-img" alt="solucion">
            </div>
        </div>
    </section>
    <section class="about container shadow-sm p-3 mb-5 bg-white">
        <p class="provisions-text  text-center">
            <strong> ProVisions </strong> es una pequeña empresa, con entusiasmo y creatividad para apoyarte a alcanzar el éxito. Trabajamos
            con tecnologías tales como: <strong> PHP, SQL, Javascript, Laravel </strong> entre otras.
        </p>
        <div class="card-deck">
            <div class="card">
                <div class="text-center mt-2">
                 <img class="hvr-shrink about_icon" src="/pvs/img/mision.png" alt="misión" height="160" width="50%" style="cursor: pointer;">
                </div>
                <div class="card-body">
                <h5 class="card-title">Misión</h5>
                <p class="card-text valors-text">Para <strong> ProVisions</strong> la principal misión es proveer  software altamente efectivo y de calidad a nuestros clientes; apoyando así a crear soluciones para el manejo
                    de todos sus procesos e información. Con ello <strong> nos comprometemos</strong> a que sus actividades serán mas eficientes y productivas.
                    Utilizaremos para lograr tu objetivo, toda nuestra creatividad y entusiasmo.
                 </p>
            </div>
        </div>
        <div class="card">
            <div class="text-center mt-2">
                 <img class="hvr-shrink about_icon" src="/pvs/img/vision.png" alt="misión" height="160" width="50%" style="cursor: pointer;">
            </div>
            <div class="card-body"> 
                <h5 class="card-title">Visión</h5>
                <p class="card-text valors-text">Ser una <strong>compañía reconocida </strong> en la industria del las T.I. que brinde soluciones estratégicas a las organizaciones mediante sistemas de información y con ello contribuir al logro de sus objetivos.</p>
            </div>
        </div>
        <div class="card">
             <div class="text-center mt-2">
                 <img class="hvr-shrink about_icon" src="/pvs/img/valores.png" alt="misión" height="160" width="50%" style="cursor: pointer;">
            </div>
            <div class="card-body">
                <h5 class="card-title">Valores</h5>
                <p class="card-text valors-text">
                    <label> <b style="color: black">•Responsabilidad:</b>  Con nuestros clientes y equipo de trabajo.</label>
                </p>
                <p class="card-text valors-text">
                    <label><b style="color: black">•Profesionalismo:</b> Para crear soluciones y alcanzar el éxito.</label>
                </p>
                <p class="card-text valors-text">
                    <label><b style="color: black">•Respeto:</b> Con nuestros clientes, nuestro trabajo y equipo.</label>
                </p>
                <p class="card-text valors-text">
                    <label><b style="color: black">•Pasión:</b> Por nuestra profesion y por todo lo que realizamos.</label>
                </p>
                <p class="card-text valors-text">
                    <label><b style="color: black">•Confianza:</b> Entre nuestro equipo de trabajo y nuestros clientes.</label>
                </p>
                <p class="card-text valors-text">
                    <label><b style="color: black">•Lealtad:</b> A todos nuestros clientes que confien en nuestro trabajo.</label>
                </p>
                <p class="card-text valors-text">
                    <label><b style="color: black">•Amor:</b> Por el desarrollo, la creación y solución de problemas.</label>
                </p>
            </div>
        </div>
        </div>
    </section> 
    @include('pvs.complements.benefits')
    <section class=" shadow-sm p-3 mb-1 bg-white">
        <div class="container text-center mt-5 mb-5">
            <div class="row">
            <div class="col-md-12">
                <h1 class="h1-ideology">¿Tienes alguna idea?</h1>
                <hr style="width: 25%; background-color: #0064de; height: 3px;">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <h4 class="h4-idea">Si tienes en mente algún proyecto, acércate a nosotros, te ayudaremos a hacerlo realidad
                con nuestro equipo de trabajo.
                </h4>
                <a href="/contacto" class="nav-link blue-btn hvr-push">Contáctanos ahora</a>
            </div>
            </div>
        </div>
    </section>
    <div class="hvr-push" id="whatsapp-icon" style="position:fixed; right:24px; bottom:100px; text-align:center; padding:3px">
        <a href="https://api.whatsapp.com/send?phone=+525531617135">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png" width="50" height="50"></a>
    </div>
    @include('pvs.complements.footer')
@endsection
