
@extends('layouts.templateVisitante')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  

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
<br/><br/>
<p style="font-size:16px; font-family: Arial, Helvetica, sans-serif;; margin-left:290px; margin-right:280px; text-align:justify;">
Gostavas de colaborar num projeto que apoia centenas de crianças e as suas famílias em Moçambique a terem um futuro mais feliz? Podes fazê-lo já com a ATACA!<br/><br/>

Junta-te como voluntário à equipa que organiza os eventos de angariação de fundos da nossa associação. Estes eventos ajudam a garantir a continuidade do trabalho que a ATACA desenvolve há mais 10 anos na área da educação em Moçambique.<br/><br/>

Em que área precisamos de ti:<br/>
Gostaríamos que colaborasses com o departamento de organização de eventos da ATACA<br/><br/>

Podes dar o teu contributo através das seguintes modalidades:

– Pedidos de orçamentos para as necessidades de cada evento<br/>
– Pedidos de patrocínios, através de contacto direto, com empresas vantajosas para o evento<br/>
– Divulgação do Evento<br/>
– Participação no evento (dar apoio no dia do evento)<br/><br/>

Ao integrares a equipa de Eventos/Comunicação da ATACA vais estar a fazer parte de uma equipa jovem e dinâmica, inteiramente dedicada a esta causa e que acredita que é possível mudar o mundo ao promover a educação e o desenvolvimento das crianças.<br/><br/>

Contacta-nos preenchendo este formulário!
</p>

<div id="main" class="container-fluid">
        <h4 class="page-header form-group col-md-12" align="center">Apply online</h4>
         <form method="POST" action="{{url('visitas')}}">
         {{ csrf_field() }}
         <h1>{{Session::get('success')}}</h1>

<section class="form-group col-md-2">

</section>
<section class="form-group col-md-8">
    <label class="form-group col-md-12">
        <span>Nome Completo*</span><br/>
        <input type="text" name="nome" id="nome" class="form-control"  required/>
    </label>
    <label class="form-group col-md-12">
        <span>Email*</span><br/>
        <input type="email" name="email" id="email" class="form-control" placeholder="betolas3@example.com" required/>
    </label>

    <label class="form-group col-md-12">
        <span>Data de Nascimento*</span><br/>
        <input type="date" name="dataNasc" id="dataNasc" class="form-control" />
    </label>

    <label class="form-group col-md-12">
        <span>Habilitacoes Academicas*</span><br/>
        <select class="form-control" name="nivelAc" id="nivelAc">
            <option>Nivel Medio</option>
            <option>Licenciatura</option>
            <option>Mestrado</option>
        </select>
    </label>

    <label class="form-group col-md-12">
        <span>Experiencia de Voluntariado*</span><br/>
        <select class="form-control" name="exp" id="exp">
            <option>Nenhuma</option>
            <option>1 ano</option>
            <option>2 anos</option>
            <option>4 anos ou mais</option>
        </select>
    </label>
    <label class="form-group col-md-12">
        <span>Attach Resume*</span><br/>
        <input type="file" name="resume" id="resume" class="form-control" />
    </label>
    
    <div id="actions" class="" style="margin-left:13px;"  >
                   
         <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</section>
</div>
                 
    </form>
</div>

@endsection