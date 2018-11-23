<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class criancaController extends Controller
{
    public function index()
  {
    $data['data']=DB::table('criancas')->get();
     return view('/servico-social/cadCrianca', $data);
   }
 /**
  * Show the form for creating a new resource.
  *
  * @return Response
  */
 public function create()
 {
     return view('/servico-social/cadCrianca');
 }

 /**
  * Store do cadastro dos visitantes.
  *
  * @return Response
  */
 public function store(Request $request)
 {
   $crianca= new \App\crianca;
   $crianca->id=$request->get('id');
   $crianca->nomeCrianca=$request->get('nomeCrianca');
   $crianca->bday=$request->get('bday');
   $crianca->entradaDay=$request->get('entradaDay');
   $crianca->nivel=$request->get('nivel');
   $crianca->proveniencia=$request->get('proveniencia');
   $crianca->genero=$request->get('genero');
   
   $crianca->nomeResponsavel=$request->get('nomeResponsavel');
   $crianca->bairro=$request->get('bairro');
   $crianca->quarteirao=$request->get('quarteirao');
   $crianca->contactoResp=$request->get('contactoResp');
   $crianca->nCasa=$request->get('nCasa');
   $crianca->rua=$request->get('rua');
   
   
   $crianca->save();

      return redirect('cadCrianca')->with('success', 'Cadastro efectuado com sucesso');
 }


 
}
