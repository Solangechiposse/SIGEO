@extends('layouts.templateVisitante')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('css/estilo.css') }}" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('css/estiloSlider.css') }}" rel="stylesheet"/>

    @section('script')
    <script>
        window.console = window.console || function(t) {};
    </script>

    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
@endsection

    <title>Pagina inicial</title>

</head>



@section('content')


<div class="">

@include('visitante.slider')






 <h1 style="margin-left: 200px; ">Sobre nos</h1><br/>

 <p style=" font-size:18px; font-family: Arial, Helvetica, sans-serif;; margin-left:200px; margin-right:200px; text-align:justify;">

     Um dia sozinho é que nem um dia sozinho. O solitarismo absorto não faz bem à alma nenhuma, não faz mesmo! Não
     se deve procurar a causa da coisa pois, mais vale achar achar solução do que identificar problema... Com toda
     tenacidade pré-existente, muita coisa de certo estará por vir, não escreva o que não estou a dizer-te.<br/>

     Solitário e solidário com tudo ao seu redor, um solitarismo deveras difícil de se sentir em primeira mão.
     Mas mesmo em jeito de segunda pessoa gramatical, sente-se uma estranha vontade inimaginável de nunca sê-lo<br/>

     A solidão do solitário não acaba não só com o sujeito mas acaba afectando o complemento circunstancial de companhia;
     é uma coisa complicadíssima de se tentar compreender porque quando o assunto é análise sintética, muitas são as abstenções.<br>

     Muitos fazem com que tente em não desistir mas não chegam nem três pés acima das coisas que providenciam a prestigiada
     queda aparatosa nos olhos dos juízes.
     Juízes com nem sequer alguma formação académica mas sim juízes formados pela matéria que os rodeia. Não é um dado
     automático, é um dado factual e como a favor dos factos, há sempre argumentos, ainda pode se esclarecer.<br/>

     Tal como a Deusa de África, preciso fazer ouvir a Voz das minhas entranhas que luta gradualmente para sair do
     anonimato inanimado.
     Uma vez aprendido, nunca mais esquecido: Para se ser um bom patrão, é preciso ser um óptimo empregado.
     A voz das minhas entranhas nega a se calar, não consigo contê-la e sei porquê!</p><br/>


 

     <br/>
        <h2 style="margin-left: 200px";>Quer contribuir para ajudar nossas crianças e não sabe como?</h2><br/>
     <p style="font-size:18px; font-family: Arial, Helvetica, sans-serif;; margin-left:200px; margin-right:200px; text-align:justify;">
         É Facil! Para oferecer ajuda ao Orfanato Primeiro de Maio, pode fazê-lo por meio de doações que podem ser monetárias ou
         materiais(no prório orfanato).  Lembre-se, qualquer gesto ou ajuda sua pode garantir o sorriso de uma criança.
         Para fazer doação monetária, <a href="donativos">clique aqui</a>
    </p>

    





</div>
@endsection
