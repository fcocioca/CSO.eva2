<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    
    public function store (Request $request) {
        // dd($request);
        $this->validate($request,[
            'txtCodigo' => 'required',
            'txtNombre' => 'required |min:3',
            'txtValor' => 'required | numeric',
            'slctCategoria' => 'required',
            'txtCantidad' => 'required | numeric',
            'txtDesc' => 'required',
        
        ]);
        $producto = new Produto();
        $producto->codigo = $request->txtCodigo;
        $producto->nombreP = $request->txtNombre;
        $producto->categorias_id = $request->placeholder;
        $producto->sucursales_id = $request->placeholder;
        $producto->descripcion = $request->txtDesc;
        $producto->save();

        $productos = Producto::get();
        
        return view('/listarProducto',[
            'productos'=>$productos


        ]);
        
    }

 


    }


