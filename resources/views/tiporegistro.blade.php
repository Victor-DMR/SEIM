@extends('layout/template')

@section('title', 'Tipo Registro')

@section('content')
<div class="content conte_principal">
    <div class="conte_row row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="logo">
                        <img src="{{asset('img/LogoSEIM.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row text-center mb-5">
                <p class="text_title mb-5">Registrarse cómo</p>
                <div class="col-sm-12 input_registro">
                    <a href="#" class="form-control bg-white mb-5 link_google">Cliente</a>
                    <a href="#" class="form-control bg-white link_google">Vendedor</a>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-sm-12 mb-2">
                    <div class="icon_home">
                        <a href="#"><img src="{{asset('img/IconoRegresar.PNG')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection()