@extends('layout/template')

@section('title', 'Perfil Vendedor')

@section('content')
<div class="content conte_principal">
    <div class="conte_row row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 bgconten">
            <div class="row text-center">
                <div class="col-12 topconten">
                    <div class="row">
                        <div class="col-4 btn-group btn_menu">
                            <svg type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="45" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Inicio</a></li>
                                <li><a class="dropdown-item" href="#">Centro de información</a></li>
                                <li><a class="dropdown-item" href="#">Reportar un problema</a></li>
                                <li><a class="dropdown-item" href="#">Ayuda</a></li>
                            </ul>
                            </svg>
                        </div>
                        <div class="col-4 logoenperfilvendedor">
                            <img src="{{asset('img/LogoSEIM2.webp')}}" alt="">
                        </div>
                        <div class="col-4 btn-group">
                            <svg type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-circle logouser" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                                <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Usuario:Ejemplo@gmail.com</a></li>
                                <li><a class="dropdown-item" href="{{ route('editarperfil') }}">Editar perfil</a></li>
                                <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo_principal">Bienvenidos al centro de información</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 respuestas">
                    <section >
                        <h2 class="titulo_principal">Preguntas sobre SEIM</h2>
                        <div >
                            <h3 class="titulo_preguntas">¿Qué es SEIM?</h3
                            <p>SEIM es una aplicación diseñada para...</p>
                        </div>
                        <div>
                            <h3 class="titulo_preguntas">¿Para qué sirve SEIM?</h3>
                            <p>SEIM se utiliza para...</p>
                        </div>
                        <div >
                            <h3 class="titulo_preguntas">Otra pregunta sobre SEIM</h3>
                            <p >Respuesta a la pregunta...</p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <section class="section">
                        <h2 class="titulo_principal">Contacto</h2>
                        <div class="contact-info">
                            <h5 class="titulo_principal">Equipo de SEIM</h5>
                            <p class="contacto">Para comunicarte con nosotros, puedes utilizar los siguientes medios:</p>
                            <ul class="contacto">
                                <li>Teléfono: 3104450223</li>
                                <li>Email: seim@gmail.com</li>
                                <li>Redes sociales: @seimapp</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
