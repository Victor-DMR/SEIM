@extends('layout.template')

@section('title', 'Buscar')

@section('content')
    <div class="content conte_principal">
        <div class="conte_row row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 bgconten">
                <div class="row text-center">

                    <div class="ubicacion">
                        <img class="tamaño " src="{{ asset('img/LogoSEIM2.webp') }}" alt="">
                    </div>

                    <div class="mb-4">
                        <h2 class="text-white">ENCONTRAMOS ESTOS RESULTADOS PARA TI</h2>
                    </div>
                    <div>
                        @foreach($busquedas as $busqueda)
                            <div class="row bg-white contenido">
                                <div class="col-3 centrarfoto">
                                    <img class="tamaño_logo" src="{{ asset('img/portada.webp') }}" alt="">
                                </div> 
                                <div class="col-9">
                                    <div class="informacion">
                                        <span><strong>{{ $busqueda->namestore }}</strong></span>
                                        <span>{{ $busqueda->name }}</span>
                                        <span>{{ $busqueda->ubicacion }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="pt-5 text-center">
                    <a href="{{ route('home') }}"><img class="tamañologo" src="{{ asset('img/LogoHome.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection
