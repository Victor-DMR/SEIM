<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;

class VendedorController extends Controller
{
    public function index()
    {
        return view('vendedor.index');
    }

    public function guardarvendedor(Request $request)
    {

        $seller = new Seller();
        $seller->name = $request->name;
        $seller->cc = $request->cc;
        $seller->email = $request->email;
        $seller->password = $request->password;
        $seller->namestore = $request->namestore;
        $seller->ubicacion= $request->ubicacion;
        $seller->category = $request->category;
        $seller->productservice = $request->productservice;
        $seller->optiontrade = $request->optiontrade;
        $seller->numberrecord = $request->numberrecord;
        $seller->save();

        $registro = 1;
        return view('vendedor.perfil', compact('registro'));
    }

    public function validarlogin(Request $request)
    {
        $validaruser = DB::table('Sellers')
            ->select('email', 'password')
            ->where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->first()
        ;

        if ($validaruser) {
            return redirect()->route('perfil-vendedor');
        } else {
            $aler = 1;
            return view('login', compact('aler'));
        }
        
    }

    public function busqueda(Request $request){

        $busquedas = DB::table('Sellers')
            ->select('*')
            ->where('productservice', 'like', '%'.$request->search.'%')
            ->get()
        ;

        /* dd($busquedas); */

        return view('vendedor.busqueda', compact('busquedas'));
    }

    public function registrovendedor(){
        return view('vendedor.registrovendedor');
    }

    public function perfil()
    {
        return view('vendedor.perfil');
    }

    public function editarPerfil()
    {
        return view('vendedor.editarperfil');
    }
    public function informacion()
    {
        return view('vendedor.informacion');
    }
}
