<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
  public function index()
{
  $name=['San Juan', 'kjansfkjd', 'lkjnalksmf'];
   return view('/secretaria/publicacao')->with(['nome'=>$name]);
}
}
