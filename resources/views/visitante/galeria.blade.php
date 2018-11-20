@extends('layouts.templateVisitante')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('css/estilo.css') }}" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('css/fotos.css') }}" rel="stylesheet"/>

  

    <title>Galeria</title>

 
</head>



@section('content')


 <div id="topo">
       
    </div>
    <br/><br/>
    <div class="conteudo">
    <h1 align="center">Galeria de fotos</h1>
    <ul id="album">
        <li id="foto01" ><span>Lema de Vida</span></li>
        <li id="foto014"><span>Quem mais?</span></li>

        <li id="foto015" ><span>School Time</span></li>
        <li id="foto04"><span>Crianca</span></li>
        <li id="foto08"><span>Facul Time</span></li>
        <li id="foto09"><span>B Group Time</span></li>

    </ul>

    </div>
@endsection
