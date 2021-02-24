@extends('blog/template')

@section('title-post')
    PVS | Blog
@endsection


@section('post')
    <div class="row">
        <div class="col-12 text-center mb-4" style="color: #0064de">
            <h1 class="post-title">Blogs de ProVisions Systems</h1>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 col-md-8 text-post">

            <div class="card" style="width: 18rem;">
                <img src="/pvs/img/icono.png" class="card-img-top" alt="..." height="250">
                <div class="card-body">
                  <h5 class="card-title">Primer Post</h5>
                  <p class="card-text">Texto de ejemplo para mostrar información del post.</p>
                  <a href="/blog/primer-post" class="btn btn-primary">Leer más</a>
                </div>
            </div>

            
        </div>
        <div class="col-12 col-md-4">
            <h4 class="text-center">Entradas Sugeridas</h4>

            <ul class="text-center">
                <li>
                    <a href="/blog/primer-post">Primer Post</a>
                </li>
            </ul>
        </div>
    </div>
@endsection