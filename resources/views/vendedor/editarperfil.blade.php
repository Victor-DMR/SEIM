@extends('layout/template')

@section('title', 'Editar Datos')

@section('content')
<div class="content conte_principal">
    <div class="conte_row row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="logoedit">
                        <img src="{{asset('img/LogoSEIM2.webp')}}" alt="">
                    </div>
                </div>
            </div>
            
            <div class="row text-center mb-5">
                <div class="col-sm-12 input_registro">
                    <label class="text-white mb-1" >Nombres</label>
                    <br>
                    <input type="text" class="form-control">
                    <br>
                    <label class="text-white mb-1" >Apellidos</label>
                    <br>
                    <input type="text" class="form-control">
                    <br>
                    <label class="text-white mb-1" >Nombre de empresa</label>
                    <br>
                    <input type="text" class="form-control">
                    <br>
                    <label class="text-white mb-1" for="correo">Correo electronico</label>
                    <br>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <br>
                    <label class="text-white mb-1" for="correo">Contraseña</label>
                    <br>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <br>
                    <label class="text-white mb-1" for="correo">Confirmar contraseña</label>
                    <br>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-sm-12 mb-2">
                    <div class="link-comenzar">
                        <a href="{{ route('perfil-vendedor') }}">Confirmar</a>
                    </div>
                </div>
                <div class="col-sm-12 mt-4">
                    <p class="text-white">No editar datos <a class="text-primary" href="{{ route('perfil-vendedor') }}">Click aqui</a></p>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection()