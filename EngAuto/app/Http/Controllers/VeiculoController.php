<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all(); 
     $veiculos = Veiculo::all();
        return view('_veiculo.index', ['veiculos' => $veiculos, 'clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all(); 
        return view('_veiculo.create', ['clientes' => $clientes] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required',
        ]);

        Veiculo::create($request->only('placa','marca', 'modelo', 'ano', 'cor', 'descricao', 'proprietario'));
        return redirect()->route('_veiculo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show($veiculo)
    {
        
        $veiculoModel = Veiculo::findOrFail($veiculo);
        return view('_veiculo.show',['veiculo' => $veiculoModel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($veiculo)
    {
        $veiculoModel = Veiculo::findOrFail($veiculo);
        return view('_veiculo.edit', ['veiculo' => $veiculoModel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $veiculo)
    {
        $veiculoModel = Veiculo::findOrFail($veiculo);
        $veiculoModel->update($request->only('placa','marca', 'modelo', 'ano', 'cor', 'descricao', 'proprietario'));
        
        return redirect()->route('_veiculo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veiculo $veiculo)
    {
        //
    }
}
