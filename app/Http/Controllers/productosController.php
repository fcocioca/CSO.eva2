<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    
    public function agregarProducto (Request $request) {
        // dd($request);
        $this->validate($request,[
            'txtCodigo' => 'required',
            'txtNombre' => 'required |min:3',
            'txtValor' => 'required | numeric',
            'slctCategoria' => 'required',
            'txtCantidad' => 'required | numeric',
        
        ]);
        return "Producto: ". $request->input('txtNombre');
    }
}
