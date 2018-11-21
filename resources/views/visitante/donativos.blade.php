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

<section style="font-size:16px; font-family: Arial, Helvetica, sans-serif;; margin-left:290px; margin-right:280px; text-align:justify;">
<h2>O que doar?</h2>
<img src="{{asset('img/Donativos.png')}}"/></br/>

Tendo em conta que as contribuições realizadas pelos tutores ao abrigo do PTàD e do Ataquinho – Programa de Bolsas de Estudo se destinam  exclusivamente ao apoio às crianças e jovens inseridos nos projetos, o Infantario necessita de desenvolver mecanismos que lhe permitam suportar todos os custos logísticos e administrativos da ONGD.<br/><br/>

Um dos mecanismos mais eficazes para fazer frente às necessidades diárias com que a ATACA se depara, para além dos eventos, venda de merchandising e da quotização dos seus associados, são os donativos realizados por particulares e empresas, que podem ser transferidos para o BIM 0033 0000 45351578948 05.<br/><br/>

Em Mocambique, o Infantario necessita, essencialmente, de <b>donativos monetários e de material</b> para a sua sede social, nomeadamente informático.

Os donativos monetários são um importante auxílio para fazer face aos custos da sede social da ONGD, tais como água, luz e comunicações, assim como das despesas inerentes ao envio de voluntários para África, nomeadamente as viagens, vistos e alojamento. Estes voluntários são os representantes institucionais da ATACA no terreno e são essenciais para a implementação dos nossos projetos.<br/><br/>
<br/><br/>
Tendo em conta que o PTàD é integralmente suportado por ferramentas informáticas que permitem o fluxo de informação entre os 
voluntários em África, a sede social em Mocambique e posteriormente os tutores das crianças e jovens apoiados, a ATACA necessita 
de expandir e renovar constantemente o material informático utilizado. Com o crescimento dos projetos e com o aumento do número 
de beneficiários apoiados, vão crescendo as necessidades ao nível de hardware, nomeadamente de computadores fixos e portáteis, 
assim como de material de escritório, de armazenamento de dados e impressoras.
<br/><br/>

<h4>Politica de Donativos para Mocambique</h4>
<img src="{{asset('img/doacao.png')}}"/></br/>
Em termos de donativos direcionados para os projetos do Infantario nos países africanos e para as crianças e jovens abrangidos pelos mesmos, é política do Infantario aceitar donativos monetários e materiais. Os 
Materiais deveram ser efectuados no proprio Infantario<br/><br/>

Esta opção da ONGD resulta, essencialmente, do facto de o Infantario preferir adquirir todos os bens em mercados locais, com vista a contribuir 
para que termine a eterna dependência externa dos países onde atua. Assim, todos e quaisquer bens para entregar às 
crianças e jovens são adquiridos nos países da intervenção dos projetos, mesmo que sejam mais caros, fomentando o desenvolvimento do comércio local e, consequentemente, criando mais riqueza e oportunidades de emprego para as comunidades. <b>As doacoes podem ser efectuados por empresas e singulares</br>


<img src="{{asset('img/singular.png')}}"/><br/>
Em caso de dúvida em relação a este assunto, poderá contactar-nos para o email primeirodemaio@orfanato.org
</section>
</br></br>
<div id="main" class="container-fluid">
        
         <form method="POST" action="{{url('donativos')}}">
         {{ csrf_field() }}
         

<section class="form-group col-md-2">

</section>
<section class="form-group col-md-8">
<i><h5>{{Session::get('success')}}</h5></i>
<h4 class="page-header form-group col-md-12" >Fazer Doacao Monetaria</h4>
    <label class="form-group col-md-12">
        <span>Nome do Doador*</span><br/>
        <input type="text" name="nome" id="nome" class="form-control"  required/>
    </label>
    <label class="form-group col-md-12">
        <span>Email*</span><br/>
        <input type="email" name="email" id="email" class="form-control" placeholder="betolas3@example.com" required/>
    </label>

    <label class="form-group col-md-12">
        <span>Valor doada (Mzn)*</span><br/>
        <input type="number" name="quantia" id="quantia" class="form-control" required />
    </label>

    <label class="form-group col-md-12">
        <span>Tipo Doador*</span><br/>
        <select class="form-control" name="tipoDoador" id="tipoDoador" required>
            <option>Singular</option>
            <option>Companhia</option>
            <option>ONG</option>
        </select>
    </label>

    
    <label class="form-group col-md-12">
        <span>Comprovativo de deposito</span><br/>
        <input type="file" name="compravativo" id="comprovativo" class="form-control" />
    </label>
    
    <div id="actions" class="" style="margin-left:13px;"  >
                   
         <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</section>
                 
    </form>
</div>

@endsection