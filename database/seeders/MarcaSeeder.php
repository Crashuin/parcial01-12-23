<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            ['idMarca' => 1, 'descripcion' => 'Reebok'],
            ['idMarca' => 2, 'descripcion' => 'Adidas'],
            ['idMarca' => 3, 'descripcion' => 'Nike'],
            ['idMarca' => 4, 'descripcion' => 'Puma'],
            ['idMarca' => 5, 'descripcion' => 'Jordan'],
        ];
        DB::table('marca')->insert($marcas);
    }
}
