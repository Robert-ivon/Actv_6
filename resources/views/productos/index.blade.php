<!-- resources/views/productos/index.blade.php -->

@extends('layouts.app') <!-- Si estás utilizando un layout, asegúrate de extenderlo aquí -->

@section('content')
    <div class="container">
        <h1>Lista de Productos</h1>
        <!-- Aquí puedes mostrar la lista de productos si es necesario -->
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar producto</a>
    </div>
@endsection
