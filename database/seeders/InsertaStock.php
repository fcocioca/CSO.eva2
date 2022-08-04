<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertaStock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('productos')->insert(array(
            [
            'productos_id'=>1,
            'cantidad'=>500,
            'valor'=>1000,
            ],
            [
            'productos_id'=>2,
            'cantidad'=>200,
            'valor'=>2000,
            ],
            [
            'productos_id'=>3,
            'cantidad'=>200,
            'valor'=>3000,
            ],
            ));
        
    }
}
