@extends('layout.template')

@section('title', 'Registro')

@section('content')
<div class="content conte_principal">
    <div class="conte_row row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
            <div class="row">
                <div class="col-sm-12 icon_home">
                    <img src="{{asset('img/LogoHome.png')}}" alt="">
                </div>
            </div>
            <div class="titulo_del_registro">
                <h2 class="titulo_registro">Registro</h2>
            </div>
            
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="logo">
                        <img src="{{asset('img/LogoSEIM.png')}}" alt="">
                    </div>
                </div>
            </div>
            
            <div class="row text-center mb-4">
                <div class="col-sm-12 input_registro">
                    <label class="text-white" for="correo">Correo electronico  / Telefono</label>
                    <br>
                    <input class="form-control" type="text" value="" aria-label="readonly input example" readonly>
                    <br>
                    <label class="text-white" for="correo">Contraseña</label>
                    <br>
                    <input class="form-control" type="text" value="" aria-label="readonly input example" readonly>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-sm-12">
                    <div class="link-comenzar">
                        <a href="#">Comenzar</a>
                    </div>
                </div>
                <div class="col-sm-12 mt-4">
                    <p>¿No tienes cuenta?<a class="text-primary" href="">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection