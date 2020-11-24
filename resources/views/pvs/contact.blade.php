@extends('pvs.complements.template')

@section('title','Contacto')

@section('css')
<link rel="stylesheet" href="/pvs/css/contacto.css">
@endsection

@section('content')

   {{-- @include('pvs.complements.menu') --}}
    

   <section class="container-fluid ">
      <div class="row">
         <div class="col-12 col-md-6" style="background-color: white">
            <form class="contact-form">
               <h2>contacto</h2>
               <div class="input-div">
                  <div class="i">
                     <i class="far fa-envelope"></i>
                  </div>
                  <div>
                     <h5>Correo electronico</h5>
                     <input class="input" type="email">
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="fas fa-user"></i>
                  </div>
                  <div>
                     <h5>Nombre</h5>
                     <input class = "input" type="text">
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="far fa-building"></i>
                  </div>
                  <div>
                     <h5>Empresa</h5>
                     <input class = "input" type="text">
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="fas fa-mobile-alt"></i>
                  </div>
                  <div>
                     <h5>telefono</h5>
                     <input class = "input" type="text">
                  </div>
               </div>
               <div class="input-div">
                  <div class="i">
                     <i class="far fa-sticky-note"></i>
                  </div>
                  <div>
                     <h5>Mensaje</h5>
                     <textarea name="message" class="input" cols="20" rows="30"></textarea>
                  </div>
               </div>
               <div class="terms-div">
                  <input type="checkbox">
                  <a class="terms-link" href="terminos-condiciones">He leido y acepto los terminos y condiciones.</a> 
               </div>
               <br> {{-- Bonito br porque yolo ahi lo acomodas :C --}}
               <div class="g-recaptcha" data-sitekey="6LcR_esZAAAAACEPY5apra4Z47-r9UpXqPltZEj4"></div>
               <br/>
               <button class="blue-btn mb-4" type="submit" value="Submit">Enviar</button>  
             </form>
         </div>
      </div>
   </section>

@endsection


@section('script')
<script type="text/javascript" src="/pvs/js/contact.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>

@endsection