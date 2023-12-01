@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Articulos</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Referencia</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Color</th>
                            <th>Precio Unitario</th>
                            <th>Observación</th>
                            <th>Foto</th>
                            <th>Marca</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articulos as $articulo )

                        <tr>
                            <td>{{$articulo->referencia}}</td>
                            <td>{{$articulo->nombre}}</td>
                            <td>{{$articulo->descripcion}}</td>
                            <td>{{$articulo->color}}</td>
                            <td>{{$articulo->precioUnitario}}</td>
                            <td>{{$articulo->observacion}}</td>
                            <td><img class="img-fluid" width="60px" height="60px" src="{{ asset('images/'. $articulo->foto ) }}" ></td>
                            <td>{{$articulo->marca_descripcion}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop


@section('js')
    <script></script>
@stop
