<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidente;
use App\Models\AccidenteModel;
use Illuminate\Http\Request;

class AccidentesController extends Controller
{
    public function index(){
        $accidentes = AccidenteModel::orderBy('id', 'asc')->paginate();
        return view('accidentes.index', compact('accidentes'));
    }

    public function create(){
        return view('accidentes.create');
    }

    public function store(StoreAccidente $request){
        $accidente = AccidenteModel::create($request->all());
        return redirect()->route('accidentes.store', $accidente);
    }

    public function show($id){
        $accidente = AccidenteModel::find($id);
        return view('accidentes.show', compact('accidente'));
    }

    public function edit(AccidenteModel $accidente){
        return view('accidentes.edit', compact('accidente'));
    }

    public function update(StoreAccidente $request, AccidenteModel $accidente){
        $accidente->update($request->all());
        return redirect()->route('accidentes.store', $accidente);
    }

    public function destroy($id){
        $accidente = AccidenteModel::find($id);
        if(!$accidente){
            return response()->json(['message'=> 'No se encontró'], 404);
        }
        $accidente->delete();
        return redirect()->route('accidentes.index');
    }
}
