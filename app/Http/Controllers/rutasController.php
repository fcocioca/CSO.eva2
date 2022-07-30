<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('/bodega')
        ->with('sucursal',"Mi Bodega");       
    }
    public function showlistarproducto () {
        return view('/listarProducto')
        ->with('arrayProducto',array('1','2','3','4','5'));     
    }
}
