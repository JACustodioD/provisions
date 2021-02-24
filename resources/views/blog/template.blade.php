@extends('pvs.complements.template')

@section('title')
    @yield('title-post')
@endsection

@section('css')
<style>
    .contact-menu{
        background: linear-gradient(to right, rgb(37, 44, 54) 0%, rgb(37, 44, 54) 100%) ;
    }
</style>

<link rel="stylesheet" href="/pvs/css/contacto.css">

@endsection

@section('content')

    @include('pvs.complements.menu')

    <div class="container section-about">
        @yield('post')
    </div>


    <div class="hvr-push" id="whatsapp-icon" style="position:fixed; right:24px; bottom:100px; text-align:center; padding:3px">
        <a href="https://api.whatsapp.com/send?phone=+525531617135">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png" width="50" height="50"></a>
    </div>
    @include('pvs.complements.footer')
@endsection
