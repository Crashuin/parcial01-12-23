@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mt-4">
            <h1>Bienvenido a Ipiropa</h1>
            <p>Descubre nuestra amplia selección de productos de alta calidad.</p>
            <a href="{{route('articulolista')}}" class="btn btn-primary">Explorar Productos</a>
            <p class="mt-5">En nuestra tienda, nos esforzamos por ofrecerte lo mejor en moda, tecnología, hogar y mucho más. Desde elegantes prendas de vestir hasta los gadgets más innovadores, cada artículo en nuestra selección está cuidadosamente seleccionado para garantizar calidad y satisfacción</p>
        </div>
        <div class="col-md-6 mt-4">
            <img src="{{ asset('images/tienda.jpg')}}" alt="Banner" class="img-fluid">
        </div>


        <div class="col-md-6 mt-5">
            <p>Estudiante: Daniel Sebastian Perez Vallejo</p>
        </div>

    </div>
</div>

@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@stop

@section('js')
    <script></script>
@stop
