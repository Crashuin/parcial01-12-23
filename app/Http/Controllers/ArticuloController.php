<?php

namespace App\Http\Controllers;

use App\Models\ArticuloModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    public function index(){
        $articulo = new ArticuloModel();
        $articulos = $articulo->mostrarArticulos();
        return view('articulo.articulolista', ['articulos' => $articulos]);
    }
}
