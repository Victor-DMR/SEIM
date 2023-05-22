@extends('layout.template')

@section('title', 'Registro de vendedor')

@section('content')
    <div class="content conte_principal">
        <div class="conte_row row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
                <div class="row text-center row_logo_title">
                    <div class="col-2">
                        <div class="logo_vendedor">
                            <img src="{{ asset('img/LogoSEIM2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-9">
                        <h2 class="text_title text-white text_vendedor mb-5">Registrarse cómo Vendedor</h2>
                    </div>
                </div>
<<<<<<< HEAD
                <form action="{{ route('guardar') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Nombre del propietario</label>
                            <br>
                            <input name="name" type="text" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Numero de cedula</label>
                            <br>
                            <input name="cc" type="number" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Correo electronico</label>
                            <br>
                            <input name="email" type="email" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Contraseña</label>
                            <br>
                            <input name="password" type="password" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Nombre del negocio</label>
                            <br>
                            <input name="namestore" type="text" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class=" mb-1 text-white" for="correo">Categoria a la que pertenece</label>
                            <br>
                            <select name="category" class="form-select select_si_no" aria-label="Default select example">
                                <option selected>Selecione</option>
                                <option value="Si">Moda</option>
                                <option value="No">Belleza</option>
                                <option value="No">Ambos</option>
                            </select>
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Producto y/o servicio que ofrece</label>
                            <br>
                            <input name="productservice" type="text" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Esta su negocio registrado en la camara de
                                comercio</label>
                            <br>
                            <select name="optiontrade" class="form-select select_si_no" aria-label="Default select example">
                                <option selected>Selecione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-sm-12 input_vendedor mb-4">
                            <label class="mb-1 text-white " for="correo">Numero de registro</label>
                            <br>
                            <input name="numberrecord" type="number" class="form-control" id="" aria-describedby="emailHelp">
=======
                <div class="row">
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Nombre del propietario</label>
                        <br>
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Numero de cedula</label>
                        <br>
                        <input type="number" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Correo electronico</label>
                        <br>
                        <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Contraseña</label>
                        <br>
                        <input type="password" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Nombre del negocio</label>
                        <br>
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Producto y/o servicio que ofrece</label>
                        <br>
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Que categoria pertenece</label>
                        <br>
                        <select class="form-select select_si_no" aria-label="Default select example">
                            <option selected>Selecione</option>
                            <option value="Si">Moda</option>
                            <option value="No">Belleza</option>
                        </select>
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Esta su negocio registrado en la camara de comercio</label>
                        <br>
                        <select class="form-select select_si_no" aria-label="Default select example">
                            <option selected>Selecione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-sm-12 input_vendedor mb-4">
                        <label class="text-dark mb-1 text-white " for="correo">Numero de registro</label>
                    <br>
                    <input type="number" class="form-control" id="" aria-describedby="emailHelp">
                </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-sm-12 mb-3 mt-3">
                        <div class="link-comenzar">
                            <a href="{{ route('vendedor-perfil') }}">Continuar</a>
>>>>>>> 05192ffa99ca8f9021e6af05761c6ddd29f7dcdc
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-sm-12 mb-3 mt-3">
                            <div class="link-comenzar">
                                <button class="btn form-control" type="submit">Continuar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row text-center mt-3 mb-4">
                    <div class="col-sm-12 mb-2">
                        <div class="icon_home">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/IconoRegresar.PNG') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
