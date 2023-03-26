@extends('layout.template')

@section('title', 'Welcome')

@section('content')
    <div class="content conte_principal">
        <div class="conte_row row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
                <div class="row text-center ">
                    <div class="col-sm-12">
                        <h1>Welcome!</h1>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <div class="logo">
                            <img src="{{asset('img/LogoSEIM.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-sm-12">
                        <div class="link-comenzar">
                            <a href="{{ route('login') }}">Comenzar</a>
                        </div>
                    </div>
                </div>
                    <div class="robot-saludo">
                        <img src="{{asset('img/RobotSaludo.PNG')}}" alt="">
                    </div>
            </div>
        </div>
    </div>
   
@endsection
