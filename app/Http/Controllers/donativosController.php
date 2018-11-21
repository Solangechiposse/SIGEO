<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class donativosController extends Controller
{
    public function index()
  {
    $data['data']=DB::table('donativos')->get();
     return view('/visitante/donativos', $data);
   }
 /**
  * Show the form for creating a new resource.
  *
  * @return Response
  */
 public function create()
 {
     return view('/visitante/donativos');
 }

 /**
  * Store do cadastro dos visitantes.
  *
  * @return Response
  */
 public function store(Request $request)
 {
   $donativo= new \App\donativo;
   $donativo->id=$request->get('id');
   $donativo->nome=$request->get('nome');
   $donativo->email=$request->get('email');
   $donativo->quantia=$request->get('quantia');
   $donativo->tipoDoador=$request->get('tipoDoador');
   $donativo->comprovativo=$request->get('comprovativo');
   
   $donativo->save();

      return redirect('donativos')->with('success', 'mensagem enviada com sucesso');
 }


 
}
