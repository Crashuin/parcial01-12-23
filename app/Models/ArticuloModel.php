<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticuloModel extends Model
{
    use HasFactory;

    protected $table = 'articulo';

    protected $primaryKey='referencia';

    public $timestamps = true;

    public function mostrarArticulos() {
        $articulos = DB::table("articulo")
            ->join('marca', 'marca.idMarca', '=', 'articulo.marca')
            ->select('articulo.*', 'marca.descripcion as marca_descripcion')
            ->get();

        return $articulos;
    }


}
