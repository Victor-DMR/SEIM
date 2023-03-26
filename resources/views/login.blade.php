@extends('layout/template')

@section('title', 'Login')

@section('content')
<div class="content conte_principal">
    <div class="conte_row row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
            <div class="row">
                <div class="col-sm-12 icon_home">
                    <a href="{{ route('home') }}"><img src="{{asset('img/LogoHome.png')}}" alt=""></a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="logo">
                        <img src="{{asset('img/LogoSEIM.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row text-center mb-5">
                <div class="col-sm-12">
                    <div class="link_google"> 
                        <a href="#"><img class="icon_google" src="{{asset('img/icon_de_google.png')}}" alt="">&nbsp;Continuar con Google</a>
                    </div>
                    <div class="link_facebook"> 
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="8%" height="8%" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                           &nbsp;Continuar con Facebook</a>
                    </div>
                </div>
            </div>
            <div class="row text-center mb-5">
                <div class="col-sm-12 input_registro">
                    <label class="text-white mb-1" for="correo">Correo electronico  / Telefono</label>
                    <br>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <br>
                    <label class="text-white mb-1" for="correo">Contraseña</label>
                    <br>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-sm-12 mb-2">
                    <div class="link-comenzar">
                        <a href="{{ route('tiporegistro')}}">Comenzar</a>
                    </div>
                </div>
                <div class="col-sm-12 mt-4">
                    <p>¿No tienes cuenta?<a class="text-primary" href="">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection()