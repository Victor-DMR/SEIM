@extends('layout.template')

@section('title', 'Welcome')

@section('content')
    <div class="content conte_principal">
        <div class="conte_row row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
                <div class="row">
                    <div class="col-2 logo text-right">
                        <img src="{{asset('img/LogoSEIM2.png')}}" alt="">
                    </div>
                    <div class="col-8 text-center">
                        <h2 id="tituloPrincipal">¡Bienvinidos!</h2>
                        <p>Lo que nececites puedes buscarlo aqui estamos para ayudarte.</p>
                        <h4>SEIM</h4>
                        <div class="row">
                            <div class="col-md-10 col-sm-12 inputBuscar">
                                <input type="text" placeholder="¿Qúe estás nececitando?">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </div>
                            <div class="col-2 text-end">
                                <a href="#">Ayuda</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 text-end">
                        <a href="$">Registrate</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                    </div>
                    <div class="col-12">
                        <p>Categorias disponibles</p>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
