<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    public function run(): void
    {
       $articulos = [
        [
            'referencia' => 'RE01',
            'nombre' => 'Zapatillas Deportivas',
            'descripcion' => 'Zapatillas deportivas de alta calidad.',
            'color' => 'Blanco',
            'precioUnitario' => 20000,
            'observacion' => 'Nueva colección',
            'foto' => '1.jpg',
            'marca' => '3',
        ],
        [
            'referencia' => 'RE02',
            'nombre' => 'Camiseta Casual',
            'descripcion' => 'Camiseta casual para uso diario.',
            'color' => 'Negro',
            'precioUnitario' => 40000,
            'observacion' => 'Edición limitada',
            'foto' => '2.jpg',
            'marca' => '2',
        ],
        [
            'referencia' => 'RE03',
            'nombre' => 'Sudadera Deportiva',
            'descripcion' => 'Sudadera para actividades deportivas.',
            'color' => 'Gris',
            'precioUnitario' => 50000,
            'observacion' => 'Ideal para entrenamientos',
            'foto' => '3.jpg',
            'marca' => '3',
        ],
        [
            'referencia' => 'RE04',
            'nombre' => 'Gorra Urbana',
            'descripcion' => 'Gorra de estilo urbano.',
            'color' => 'Rojo',
            'precioUnitario' => 20000,
            'observacion' => 'Diseño moderno',
            'foto' => '4.jpg',
            'marca' => '4',
        ],
        [
            'referencia' => 'RE05',
            'nombre' => 'Calcetines Deportivos',
            'descripcion' => 'Calcetines ideales para deportes.',
            'color' => 'Azul',
            'precioUnitario' => 10000,
            'observacion' => 'Pack de 4 pares',
            'foto' => '5.jpg',
            'marca' => '5',
        ],

    ];

    DB::table('articulo')->insert($articulos);
    }
}
