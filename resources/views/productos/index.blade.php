@extends('layouts.app')

@section('title', 'Home')

@section('content')
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Table Tailwind CSS</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class="bg-gray-100 py-12 px-6 text-gray-800">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table class="table-fixed w-full">
          <thead>
            <tr class="bg-indigo-500 text-white">
              <th class="w-20 py-4 ...">ID</th>
              <th class="w-1/8 py-4 ...">Title</th>
              <th class="w-1/16 py-4 ...">Country</th>
              <th class="w-1/16 py-4 ...">Price</th>
              <th class="w-1/16 py-4 ...">Created</th>
              <th class="w-1/16 py-4 ...">Updated</th>
              <th class="w-28 py-4 ...">Actions</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($productos as $row)
                
            
            <tr>
              <td class="py-3 px-6">{{ $row->id }}</td>
              <td class="p-3">{{ $row->title }}</td>
              <td class="p-3 text-center">{{ $row->country }}</td>
              <td class="p-3 text-center">{{ $row->price }}</td>
              <td class="p-3 text-center">{{ $row->created_at }}</td>
              <td class="p-3 text-center">{{ $row->updated_at }}</td>
              <td class="p-3 flex justify-center">
                <form action="{{ route('Productos.destroy', $row->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                    <i class="fas fa-trash"></i></button>
                </form>
                
                <a href="{{ route('Productos.edit',$row->id) }}"><button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                    <i class="fas fa-pen"></i></button></a>
              </td>
            </tr>

            @endforeach
            
            
          </tbody>
        </table>

      </div>
    </div>


  </body>
</html>


@endsection