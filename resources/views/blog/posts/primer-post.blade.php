@extends('blog/template')

@section('title-post')
    PVS | Primer Post
@endsection


@section('post')
    <div class="row">
        <div class="col-12 text-center mb-4 " style="color: #0064de">
            <h1 class="post-title">Primer Post</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 text-post">

            <h1 class="post-title">Primer Post</h1>

            <h6><i>Publicado el 23 de Febrero de 2021. Autor: <b>JACustodioD</b></i></h6>

            {{-- Primer parte del post --}}
            
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
            </p>

            <img src="/pvs/img/desarrollo1.png" alt="Primer imagen del post" height="250">

            {{-- Segunda parte del post --}}

            <p class="text-justify mt-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores 
                dolore, deserunt a perferendis neque maxime enim repellendus harum reprehenderit ut esse accusantium fuga vel quis corporis, blanditiis placeat quaerat libero.
            </p>
            
            <img src="/pvs/img/desarrollo1.png" alt="Primer imagen del post" height="250">

            
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