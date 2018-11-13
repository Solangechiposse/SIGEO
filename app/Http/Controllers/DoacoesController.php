<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoacoesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return Response
  */
  public function index()
  {
    $name=['San Juan', 'kjansfkjd', 'lkjnalksmf'];
     return view('/secretaria/publicacao')->with(['nome'=>$name]);
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
