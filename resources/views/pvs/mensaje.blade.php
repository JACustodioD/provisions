
 @extends('pvs.complements.template')
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

 <style>
 .cont-message{
    height: 100%; 
 }
 .display-4{
    text-shadow: -2px -2px 1px  #e5e5e5



 }
 .display-4, p{
     color: #0064de;
 }

 
 p{
     font-size: 1.3em;
 }
 hr{
     margin-bottom: 0 !important;
 }

 </style>
 
     <div class="container cont-message d-flex justify-content-center align-items-center" >
     <div class="row ">
        <div class="col-md-12">
            <div class="display-4 animate__animated animate__backInDown">
                ¡Gracias por escribirnos!
            </div>
            <p class="text-center">Nos pondremos en contacto a la brevedad</p>
            <hr style="width: 25%; background-color: #a5d936; height: 3px;">
                  
        </div>
     </div>      
    </div>
 <script>
        function goIndex() {
            window.location = "/";
        }
        setTimeout("goIndex()", 3000);
    </script>
</html>