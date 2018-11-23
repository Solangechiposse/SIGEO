<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class controllerVisita extends Controller
{
    public function index()
  {
    $data['data']=DB::table('visitas')->get();
     return view('/secretaria/listaVisitas', $data);
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

 /**
  * Store do cadastro dos visitantes.
  *
  * @return Response

  */

 public function edit($id)
 {
   $doacao=DB::find($id);
    return view('/secretaria/regVisita', compact('visitas'));
 }

 public function delete()
 {
   $doacao=DB::find($id);
   $doacao->delete();
   $data['data']=DB::table('visitas')->get();
   return view('/secretaria/regVisitas', $data);
 }

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

      return redirect('visitas')->with('success', 'Information has been added');
 }


 public function salvarVisitas(Request $request)
 {
  $visita= new \App\visita;
  $visita->id=$request->get('id');
  $visita->nomeVisitante=$request->get('nomeVisitante');
  $visita->tipoDocumento=$request->get('tipoDocumento');
  $visita->nrDoc=$request->get('nrDoc');
  $visita->bday=$request->get('bday');
  $visita->local=$request->get('local');
  $visita->assunto=$request->get('assunto');
  $doacao->save();

     return redirect('/visitante/visitas')->with('success', 'Visita marcada com sucesso');
 }
}
