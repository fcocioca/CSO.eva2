<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertaStock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock')->insert(array(
            [
            'productos_id'=>4,
            'cantidad'=>500,
            'valor'=>1000,
            ],
            [
            'productos_id'=>5,
            'cantidad'=>200,
            'valor'=>2000,
            ],
            [
            'productos_id'=>6,
            'cantidad'=>200,
            'valor'=>3000,
            ]
            ));
        
    }
}
