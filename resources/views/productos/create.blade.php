@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <form action="{{ route('Productos.store') }}" method="POST" class="bg-white w-1/3 p-4 border-gray-600 shadow-x1 rounded-lg">
        @csrf
        <h2 class="text-2x1 text-center py-4 mb-4 font-semibold ">Crear Productos</h2>
        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="title" name="title">
        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Country" name="country">
        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Price" name="price">

        <button type="submit" class="my-3 w-full bg-blue-500 p-2 fond-semibold rounded text-white hover:bg-blue-600">Enviar</button>
    </form>

@endsection