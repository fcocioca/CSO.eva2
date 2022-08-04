<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $table = 'stock';

    public function productos(){
        return $this->belongsTo(Produto::class,'productos_id');

    }
}
