<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use PhpParser\Node\Expr\FuncCall;

class ProductosController extends Controller
{
    public function index(){

        $productos = Productos::all();

        return view('Productos.index',compact('productos'));
    }

    public function create(){
        return view('Productos.create');
    }

    public function store(Request $request){
        $productos = new productos();

        $productos->title = $request->title;
        $productos->country = $request->country;
        $productos->price = $request->price;

        $productos->save();

        return redirect()->route('Productos.index');

    }

    public function edit($id){

        $productos = productos::find($id);


        return view('Productos.edit',compact('productos'));
    }

    public function update(Request $request, $id ){
        $productos = productos::find($id);

        $productos->update($request->all());

        return redirect()->route('Productos.index');
    }

    public function destroy($id){

        $productos = productos::find($id);

        $productos->delete();
        
        return redirect()->route('Productos.index');
    }
}
