<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;

class rutasController extends Controller
{
    public function showindex () {
        return view('/index');      
    }

    public function showeliminaP () {
        return view('/eliminaP');        
    }
    public function showIngresaP () {
        return view('/ingresaP');        
    }
    public function showbodega () {
        $sucursales = Sucursal::get();
        return view('/bodega',[
        'sucursales'=>$sucursales
        ]);       
        
    }
    public function showlistarproducto () {
        $productos = Producto::get();
        
        return view('/listarProducto',[
            'productos'=>$productos


        ]);
             
    }
}
