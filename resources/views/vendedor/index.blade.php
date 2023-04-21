@extends('layout/template')

@section('title', 'Tipo Registro')

@section('content')
<div class="content conte_principal">
    <div class="conte_row row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
            <div class="row text-center">
                <div class="col-12">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                    </div>
                </div>
            </div>
            <div class="row text-center mb-5">
                <div class="col-sm-12">
                    
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-sm-12 mb-2">
                    <div class="icon_home">
                        <a href="{{ route('login') }}"><img src="{{asset('img/IconoRegresar.PNG')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection()