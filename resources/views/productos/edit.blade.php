@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <form action="{{ route('Productos.update', $productos->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-600 shadow-x1 rounded-lg">
        @csrf
        @method('put')
        <h2 class="text-2x1 text-center py-4 mb-4 font-semibold ">Editar Productos {{ $productos->id }}</h2>
        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="title" name="title" value="{{$productos->title}}">
        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Country" name="country" value="{{$productos->country}}">
        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Price" name="price" value="{{$productos->price}}">

        <button type="submit" class="my-3 w-full bg-green-500 p-2 fond-semibold rounded text-white hover:bg-green-600">Enviar</button>
    </form>

@endsection