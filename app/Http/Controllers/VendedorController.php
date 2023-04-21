<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index(){
        return view('vendedor.index');
    }

    public function perfil(){
        return view('vendedor.perfil');
    }
}
