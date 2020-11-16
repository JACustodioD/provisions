@extends('pvs.complements.template')

@section('title','Acerca de')

@section('content')

    @include('pvs.complements.menu')

    <section class="section-about container shadow-sm p-3 mb-5 bg-white">
        <div class="row">
            <div class="col-md-6">
                <h1 class="about-h1 text-center">¿Por qué Provisions?</h1>
                <hr style="width: 25%; background-color: #a5d936; height: 3px;">
                <p class="about-text">En Provisions, somos un equipo totalmente comprometido con
                    nuestros clientes, para brindarles la mejor experiencia,
                    garantizado así calidad, y toda la atención que te mereces.
                    Somos un equipo emprendedor, con ganas de ayudarte de igual
                    forma a tomar el camino del éxito. Nuestra garantía de calidad 
                    y satisfacción nos respalda.
                </p>
            </div>
        </div>
    </section>
    <section class="about container shadow-sm p-3 mb-5 bg-white">
        <p class="provisions-text  text-center">
            <strong> ProVisions </strong> es una pequeña empresa, con entusiasmo y creatividadd para apoyarte a alcanzar el éxito. Trabajamos
            Con tecnologías tales como: <strong> PHP, SQL, Javascript, Laravel </strong> entre otras.
        </p>
        <div class="card-deck">
            <div class="card">
                <div class="text-center mt-2">
                 <img  src="/pvs/img/mision.png" alt="misión" height="160" width="50%">
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
                 <img  src="/pvs/img/vision.png" alt="misión" height="160" width="50%">
            </div>
            <div class="card-body"> 
                <h5 class="card-title">Visión</h5>
                <p class="card-text valors-text">Ser una <strong>compañía reconocida </strong> en la industria del las T.I. que brinde soluciones estratégicas a las organizaciones mediante sistemas de información y con ello contribuir al logro de sus objetivos.</p>
            </div>
        </div>
        <div class="card">
             <div class="text-center mt-2">
                 <img  src="/pvs/img/valores.png" alt="misión" height="160" width="50%">
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
     
@endsection