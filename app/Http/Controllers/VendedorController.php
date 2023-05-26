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
        $vendedors = DB::table('Sellers')
            ->select('email', 'password')
            ->where('email', '=', $request->email)
            ->first()
        ;

        if ($vendedors) {
            $aler = 1;
            return view('vendedor.registrovendedor', compact('aler'));
        }else{
            $seller = new Seller();
            $seller->name = $request->name;
            $seller->cc = $request->cc;
            $seller->phone = $request->phone;
            $seller->email = $request->email;
            $seller->password = $request->password;
            $seller->namestore = $request->namestore;
            $seller->ubicacion = $request->ubicacion;
            $seller->category = $request->category;
            if ($request->hasFile('imgportada')) {
                $imgportada = $request->file('imgportada');
                $destinationPath = 'img/vendedor/';
                $filename = time() . '-' . $imgportada->getClientOriginalName();
                $uploadimgportada = $request->file('imgportada')->move($destinationPath, $filename);
                $seller->imgportada = $destinationPath . $filename;
            }else {
                $seller->imgportada = 'null';
            }
            if ($request->hasFile('imgperfil')) {
                $imgperfil = $request->file('imgperfil');
                $destinationPath = 'img/vendedor/';
                $filename = time() . '-' . $imgperfil->getClientOriginalName();
                $uploadimgperfil = $request->file('imgperfil')->move($destinationPath, $filename);
                $seller->imgperfil = $destinationPath . $filename;
            }else {
                $seller->imgperfil = 'null';
            }
            $seller->productservice = $request->productservice;
            $seller->optiontrade = $request->optiontrade;
            $seller->numberrecord = $request->numberrecord;
            $seller->save();

            $registro = 1;
            return view('login', compact('registro'));
        }
    }

    public function validarlogin(Request $request)
    {
        $validaruser = DB::table('Sellers')
            ->select('email', 'password')
            ->where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->first();

        if ($validaruser) {
            $vendedors = DB::table('Sellers')
                ->select('*')
                ->where('email', '=', $request->email)
                ->first();
            $datos = 1;
            return view('vendedor.perfil', compact('vendedors', 'datos'));
        } else {
            $aler = 1;
            return view('login', compact('aler'));
        }
    }

    public function busqueda(Request $request)
    {

        $busquedas = DB::table('Sellers')
            ->select('*')
            ->where('productservice', 'like', '%' . $request->search . '%')
            ->get();

        $mostrar = 1;

        return view('vendedor.busqueda', compact('busquedas', 'mostrar'));
    }

    public function registrovendedor()
    {
        return view('vendedor.registrovendedor');
    }

    public function perfil(Request $request)
    {
        $vendedors = DB::table('Sellers')
            ->select('*')
            ->where('id', '=', $request->id)
            ->first();
            $mostrar = 1;
        return view('vendedor.perfil', compact('vendedors', 'mostrar'));
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
