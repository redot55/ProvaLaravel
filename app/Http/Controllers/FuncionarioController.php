<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo csrf_token();
        $funcionario = Funcionario::all();
        return $funcionario;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Funcionario::create($request->all());
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->fill($request->all());
        $funcionario->save();
        return $funcionario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Funcionario::destroy($id);
        return 'Funcionário deletado com sucesso!';
    }
}
