<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class visitasController extends Controller
{
    public function index()
  {
    $data['data']=DB::table('visitas')->get();
     return view('/secretaria/regVisitas', $data);
   }
 /**
  * Show the form for creating a new resource.
  *
  * @return Response
  */
  public function create()
  {
     return view('/secretaria/regVisitas');
  }

 public function edit($id)
 {
   $doacao=DB::find($id);
    return view('/secretaria/regDoacoes', compact('visita'));
 }

 public function delete()
 {
   $doacao=DB::find($id);
   $doacao->delete();
   $data['data']=DB::table('visitas')->get();
   return view('/secretaria/regVisitas', $data);
 }

 /**
  * Store do cadastro dos visitantes.
  *
  * @return Response
  
  */
  
 public function store(Request $request)
 {
   $visita= new \App\visita;
   $visita->id=$request->get('id');
   $visita->nomeVisitante=$request->get('nomeVisitante');
   $visita->tipoDocumento=$request->get('tipoDocumento');
   $visita->nrDoc=$request->get('nrDoc');
   $visita->bday=$request->get('bday');
   $visita->local=$request->get('local');
   $visita->assunto=$request->get('assunto');
   $visita->save();

      return redirect('regVisitas')->with('success', 'Information has been added');
 }



}