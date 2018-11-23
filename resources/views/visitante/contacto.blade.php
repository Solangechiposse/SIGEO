@extends('layouts.templateVisitante')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link type="text/javascript" rel="stylesheet" media="screen" href="{{ asset('js/distritos-provincias_moz.js') }}" rel="stylesheet"/>

  

    <title>Contacto</title>
    @section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection
 
</head>



@section('content')

@section('content')

<div id="main" class="container-fluid">
        <h3 class="page-header form-group col-md-12" align="center">Ficha de Contacto</h3>
         <form method="POST" action="{{url('contacto')}}">
         {{ csrf_field() }}
         

<section class="form-group col-md-1">

</section>
<section class="form-group col-md-4">
<h2>SEDE</h2>
Horário da Sede - Sob marcação<br/><br/>

por favor contacte-nos para o 217 150 728<br/><br/>

terça e sexta-feira: 9h30 às 12h30 e 14h00 às 18h<br/><br/>

quarta-feira: 15h00 às 23h00</br>

Rua de betolas3, nº 842 4200-209 Maputo - Mocambique<br/><br/>

+258 842 582 019<br/><br/>

primeirodemaio@orfanato.org<br/><br/>

betolas3@houana.org<br/><br/>

voluntariado@aorfanato.org<br/><br/>

BIM:  0033 0000 45323947237 05<br/><br/>

Geral :  0033 0000 45351578948 05<br/><br/>


</section>


<section class="form-group col-md-5">
<i><h5>{{Session::get('success')}}</h5></i>
    <label class="form-group col-md-12">
        <span>O seu nome (obrigatorio)</span><br/>
        <input type="text" name="nome" id="nome" class="form-control" style="width:560px; height:40px" required/><br/><br/>
    </label>
    <label class="form-group col-md-12">
        <span>O seu email (obrigatorio)</span><br/>
        <input type="email" name="email" id="email" class="form-control" placeholder="betolas3@example.com" style="width:560px; height:40px" required/><br/><br/>
    </label>

    <label class="form-group col-md-12">
        <span>Assunto </span><br/>
        <input type="text" name="assunto" id="assunto" class="form-control" style="width:560px; height:40px"/><br/><br/>
    </label>
    <label class="form-group col-md-12" >
        <span>A sua mensagem</span><br/>
        <textarea cols="26" rows="5" class="form-control" placeholder="Deixe ficar a mensagem aqui" name="mensagem" id="mensagem"></textarea><br/><br/>
        Ao submeter concordo com a<a href="politica"> Política de Privacidade e Termos de Uso</a>
    </label><br/><br/>
    

</section>
</div>
                 <div id="actions" class=""  style="margin-left: 44%">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        
                    </div>
                 </div>
            </form>
            </div>

@endsection