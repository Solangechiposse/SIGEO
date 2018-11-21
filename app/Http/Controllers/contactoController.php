<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class contactoController extends Controller
{
    public function index()
  {
    $data['data']=DB::table('visitas')->get();
     return view('/visitante/contacto', $data);
   }
 /**
  * Show the form for creating a new resource.
  *
  * @return Response
  */
 public function create()
 {
     return view('/visitante/contacto');
 }

 /**
  * Store do cadastro dos visitantes.
  *
  * @return Response
  */
 public function store(Request $request)
 {
   $contacto= new \App\contacto;
   $contacto->id=$request->get('id');
   $contacto->nome=$request->get('nome');
   $contacto->email=$request->get('email');
   $contacto->assunto=$request->get('assunto');
   $contacto->mensagem=$request->get('mensagem');
   
   $contacto->save();

      return redirect('contacto')->with('success', 'mensagem enviada com sucesso');
 }


 
}
