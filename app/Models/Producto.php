<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $table = 'productos';

    public function stock(){
        return $this->hasMany(Stock::class);

    }

    public function sucursales(){
        return $this->belongsTo(Sucursal::class,'sucursales_id');

    }

    public function categorias(){
        return $this->belongsTo(Categoria::class,'categorias_id');

    }

}
