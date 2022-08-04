<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertaProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
            'codigo'=>'TK421',
            'nombreP'=>'Levadura',
            'categorias_id'=>1,
            'sucursales_id'=>1,
            'descripcion'=>'La levadura, siendo la más común la S. cerevisiae, se utiliza en panadería.',
            ],
            [
            'codigo'=>'THX1138',
            'nombreP'=>'Duraznos en conserva',
            'categorias_id'=>1,
            'sucursales_id'=>2,
            'descripcion'=>'Se llama Duraznos en conserva a los frutos del Prunus persica L, blancos o amarillos cortados generalmente en mitades.',  
            ],
            [
            'codigo'=>'FN2187',
            'nombreP'=>'Harina',
            'categorias_id'=>1,
            'sucursales_id'=>3,
            'descripcion'=>'La harina (término proveniente del latí) ; Se puede obtener harina de distintos cereales mediante el proceso de molienda',
            ]
            ));
    }
}
