<?php

namespace App\Http\Controllers\visitante;

use Illuminate\Http\Request;

class paginaVisitanteController extends Controller
{
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
