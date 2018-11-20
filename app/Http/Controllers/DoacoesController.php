<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class DoacoesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return Response
  */
  public function index()
  {
    $data['data']=DB::table('doacaos')->get();
     return view('/secretaria/listaDoacoes', $data);
   }
 /**
  * Show the form for creating a new resource.
  *
  * @return Response
  */

  public function create()
  {
     return view('/secretaria/regDoacoes');
  }

 public function edit($id)
 {
   $doacao=DB::find($id);
    return view('/secretaria/regDoacoes', compact('doacao'));
 }

 public function delete()
 {
   $doacao=DB::find($id);
   $doacao->delete();
   $data['data']=DB::table('doacaos')->get();
   return view('/secretaria/regDoacoes', $data);
 }

 /**
  * Store a newly created resource in storage.
  *
  * @return Response
  */
 public function store(Request $request)
 {
   $doacao= new \App\Doacao;
   $doacao->tipoDoador=$request->get('tipoDoador');
   $doacao->tipoDoacao=$request->get('tipoDoacao');
   $doacao->quantidade=$request->get('quantity');
   $doacao->descricao=$request->get('descricao');
   $doacao->save();

      return redirect('doacoes')->with('success', 'Information has been added');
 }
}
