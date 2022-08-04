<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertaSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('sucursales')->insert(array(
            [
            'nombreSucursal'=>'Casa Matriz',
            'direccion'=>'Alonso de Cordoba 8991 - Las Condes'
            ],
            [
            'nombreSucursal'=>'Maipu',
            'direccion'=>'AV. Pajaritos 7659 - Maipu'
            ],
            [
            'nombreSucursal'=>'La Serena',
            'direccion'=>'Los husares de la muerte 158'
            ]
            ));
    }
}
