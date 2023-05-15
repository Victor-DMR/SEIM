@extends('layout.template')

@section('title', 'Buscar')

@section('content')
    <div class="content conte_principal">
        <div class="conte_row row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 bgconten">
                <div class="row text-center">

                    <div class="ubicacion">
                        <img class="tamaño " src="{{ asset('img/LogoSEIM2.png') }}" alt="">
                    </div>

                    <div class="mb-4">
                        <h2 class="text-white">ENCONTRAMOS ESTOS RESULTADOS PARA TI</h2>
                    </div>
                    <div>
                        <div class="row bg-white contenido">
                            <div class="col-3 centrarfoto">
                                <img class="tamaño_logo" src="{{ asset('img/portada.jpg') }}" alt="">
                            </div> 
                            <div class="col-9">
                                <div class="informacion">
                                    <span><strong>Sandra</strong></span>
                                    <span>Victor David Montoya Ramirez</span>
                                    <span>CL 6A #23-23</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row bg-white contenido">
                            <div class="col-3">
                                <img class="tamaño_logo" src="{{ asset('img/portada.jpg') }}" alt="">
                            </div> 
                            <div class="col-9">
                                <div class="informacion">
                                    <span><strong>Muebles internacionales de colombia</strong></span>
                                    <span>Cesar Camilo Furnieles</span>
                                    <span>xxxxx</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row bg-white contenido">
                            <div class="col-3">
                                <img class="tamaño_logo" src="{{ asset('img/portada.jpg') }}" alt="">
                            </div> 
                            <div class="col-9">
                                <div class="informacion">
                                    <span><strong>Sandra la 40</strong></span>
                                    <span>Cesar Camilo Furnieles</span>
                                    <span>xxxxx</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5 text-center">
                    <img class="tamaño" src="{{ asset('img/LogoHome.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
