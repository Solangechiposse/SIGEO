@extends('layouts.app')

@section('content')
    <div class="conteudo">
        <br/><br/>
            <h2 style="margin-left: 20px;">Marcação de visitas</h2><br/>
            <p style="margin-left: 20px;font-size: 13pt;">
                O orfanato primeiro de maio está aberto para visitas. Se você é um dos interessados em visitar as nossas instalações
                para conhecer nossas alegres crianças, basta preencher o formulário abaixo de reserva de data para visita.</p>
            <br/><br/>

        <form name="visita">
            <div style="width: 420px;height: 400px; border: 1px solid #ccc;margin-left: 20px;margin-right: auto;padding: 20px; " id="top2">
            
                <label>Nome do visitante</label><br/>
                  <input type="text" id="nome" name="nome" class="fieldSize"><br/>

                <label>Email</label><br/>
                 <input type="email" id="nome" name="nome" class="fieldSize"><br/>

                <label>Local da visita</label><br/>
                <select class="fieldSize">
                   <option>Nenhum</option>
                   <option>Instalacoes</option>
                   <option>Dormitorio</option>
                   <option>Patio</option><br/>
                </select><br/>
                <label>Data da visita</label><br/>
                <input type="text" id="calendario" class="fieldSize"/><br/>

                <label>Assunto</label><br/><br/>
                <textarea placeholder="Digite o assunto aqui"></textarea>
           
              
               
              


              
                

            </div>
            <br/><br/>

            <input type="submit" value="Submeter pedido" class="btn" style=" padding:5px; margin-left: 20px">


            <br/><br/>

        </form>
        <br/>
        <p style="text-align: justify; padding-left: 5px; width: 250px; float:right">
        <b style="font-size: 20px">Localização:</b><br/> <br/>
        <b>Província:</b> Maputo<br/>
        <b>Avenida:</b></br>
        <b>Paragem próxima:</b>
        </p>

        <br/><br/><br/><br/><br/><br/>

@endsection