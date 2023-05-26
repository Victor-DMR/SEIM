@extends('layout/template')

@section('title', 'Perfil Vendedor')

@section('content')
    <div class="content conte_principal">
        <div class="conte_row row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 bgconten">
                <div class="row text-center">
                    <div class="col-12 topconten">
                        @isset($datos)
                            <div class="row">
                                <div class="col-4 btn-group btn_menu">
                                    <svg type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"
                                        xmlns="http://www.w3.org/2000/svg" width="45" height="35" fill="currentColor"
                                        class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Inicio</a></li>
                                        <li><a class="dropdown-item" href="#">Centro de información</a></li>
                                        <li><a class="dropdown-item" href="#">Reportar un problema</a></li>
                                        <li><a class="dropdown-item" href="#">Ayuda</a></li>
                                    </ul>
                                </div>
                                <div class="col-4 logoenperfilvendedor">
                                    <img src="{{ asset('img/LogoSEIM2.webp') }}" alt="">
                                </div>
                                <div class="col-4 btn-group">
                                    <svg type="button" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                        aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                        fill="currentColor" class="bi bi-person-circle logouser" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Usuario: {{ $vendedors->email }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('editarperfil') }}">Editar perfil</a></li>
                                        <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endisset
                    </div>
                </div>
                <div class="row text-center mb-5 mt-3 justify-content-center">
                    <div class="col-12">
                        <div class="portada">
                            <img src="{{ asset( $vendedors->imgportada ) }}" alt="img portada">
                        </div>
                        
                        <div class="perfil">
                            <img src="{{ asset( $vendedors->imgperfil ) }}" alt="img portada">
                        </div>
                        <div class="row conteinfoperfil">
                            <div class="col-12">
                                <p class="text-white "><strong> {{ $vendedors->name }}
                                    </strong><span>({{ $vendedors->namestore }})</span></p>
                            </div>
                            <div class="col-12">
                                <p class="text-white">Categoria "{{ $vendedors->category }}"</p>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-white">
                                        {{ $vendedors->productservice }}
                                    </div>
                                    {{-- <div class="col-4 text-white">
                                        Tratamientos
                                    </div>
                                    <div class="col-4 text-white">
                                        Cortes
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="textcenternone text-white"><span>Fotos</span></p>
                            </div>
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-3 col-sm-2 col-3 fotosdeproducto">
                                        <img src="{{ asset('img/portada.webp') }}" alt="img1">
                                    </div>
                                    <div class="col-md-3 col-sm-2 col-3 fotosdeproducto">
                                        <img src="{{ asset('img/portada.webp') }}" alt="img2">
                                    </div>
                                    <div class="col-md-3 col-sm-2 col-3 fotosdeproducto">
                                        <img src="{{ asset('img/portada.webp') }}" alt="img3">
                                    </div>
                                    <div class="col-md-3 col-sm-2 col-3 fotosdeproducto">
                                        <img src="{{ asset('img/portada.webp') }}" alt="img3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="textcenternone text-white"><span>Calificación</span> 5.0</p>
                                <div class="numstar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        fill="currentColor" class="bi bi-star-fill starfill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        fill="currentColor" class="bi bi-star-fill starfill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        fill="currentColor" class="bi bi-star-fill starfill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        fill="currentColor" class="bi bi-star-fill starfill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        fill="currentColor" class="bi bi-star-fill starfill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row aviso">
                                    <div class="col-2 altavos">
                                        <svg xmlns="http://www.w3.org/2000/svg" width=40" height="40"
                                            fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                            <path
                                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                        </svg>
                                    </div>
                                    <div class="col-10">
                                        <strong class="text-white">!TE OFRESCO MIS SERVICIO¡</strong>
                                        <p class="text-white">si me escojes podras disfrutar de muchos veneficios</p>
                                    </div>
                                </div>
                            </div>
                            @isset($mostrar)
                                <div class="row mt-4">
                                    <div class="col-4 gps">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                            fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                    </div>

                                    <div class="col-4">
                                        <div class="icon_regresar">
                                            <a href="{{ route('home') }}"><img src="{{ asset('img/LogoHome.webp') }}"
                                                    alt=""></a>
                                        </div>
                                    </div>

                                    <div class="col-4 sms">
                                        <a href="https://api.whatsapp.com/send?phone=57{{ $vendedors->phone }}"
                                            target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                                <path
                                                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                <path
                                                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
