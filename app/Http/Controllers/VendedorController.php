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
        $seller->category = $request->category;
        $seller->productservice = $request->productservice;
        $seller->optiontrade = $request->optiontrade;
        $seller->numberrecord = $request->numberrecord;
        $seller->save();

        return redirect()->route('perfil-vendedor');
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
            return redirect()->route('login');
        }
        
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
