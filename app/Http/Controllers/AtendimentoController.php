<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Atendimento;
use App\Http\Requests\AtendimentoRequest;

class AtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //variavel
        $atendimento = Atendimento::all();      
        return view('atendimento.index', ['atendimento'=>$atendimento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atendimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AtendimentoRequest $request)
    {
        $input = $request->all();
        Atendimento::create($input);
        
        return redirect('atendimento');
    }

    /**
    * Exibe todos os usuáros
    * @return 
    */
    public function usuario()
    {       
        $usuarios = Usuario::all();

        return view('atendimento.usuario', ['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atendimento = Atendimento::find($id);
        return view('atendimento.edit', compact('atendimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AtendimentoRequest $request, $id)
    {
        $atendimento = Atendimento::find($id)->update($request->all());
        
        return redirect('atendimento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Atendimento::find($id)->delete();
        
        return redirect('atendimento');
    }
}
