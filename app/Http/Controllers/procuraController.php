<?php

namespace App\Http\Controllers;

use App\procura;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class procuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $procuras=procura::all();
        return view('visitante.procuracri',compact('procuras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visitante.procuracri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

        $procura= new \App\procura;
        $procura->id=$request->get('id');
        $procura->nome=$request->get('nome');
        $procura->alcunha=$request->get('alcunha');
        $procura->idade=$request->get('idade');
        $procura->escola=$request->get('escola');
        $procura->genero=$request->get('genero');
        $procura->localDesaparecimento=$request->get('localDesaparecimento');
        $procura->foto=$request->get('foto');
        $procura->data=$request->get('data');
        $procura->pai=$request->get('pai');
        $procura->mae=$request->get('mae');
        $procura->caracteristicas=$request->get('caracteristicas');
        $procura->pessoaProcura=$request->get('pessoaProcura');
        $procura->trabalho=$request->get('trabalho');
        $procura->parentesco=$request->get('parentesco');
        $procura->bairro=$request->get('bairro');
        $procura->nCasa=$request->get('nCasa');
        $procura->contacto=$request->get('contacto');
        
        
        $procura->save();
        //procura::create($request->all());
       return redirect('procuracri')->with('success','Pedido submetido com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $procuras=procura::findOrFail($id);
        return view('visitante.show',compact('procuras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $procuras=procura::findOrFail($id);
        return view('visitante.edit',compact('procuras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
     
        procura::findOrFail($id)->update($request->all());
        return redirect()->route('procuracri.index')->with('success','Exame editado com sucesso');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        procura::findOrFail($id)->delete();
        return redirect()->route('procuracri.index')->with('success','Exame apagado com sucesso');
    }

    public function search(Request $request){
        $exameRequisitados = ExameRequisitado_model::find($request->input('search'));
        return view('visitante.index', compact('procuras'));

    }
}
