@extends('layouts.templateVisitante')
@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection

@section('content')

    <div id="main" class="container-fluid"  style="font-size:18px; font-family: Arial, Helvetica, sans-serif;">
        <h3 class="page-header form-group col-md-12" align="center">Ficha de Marcacao de Visitas</h3>
         <form method="POST" action="{{url('visitas')}}">
         {{ csrf_field() }}
         <i><h5>{{Session::get('success')}}</h5></i>
            <!-- Dados do Funcionario-->
            <div id="top" class="row">
                <!-- Seccao dos dados-->
      <section class="form-group col-md-2">
      </section>
      <section class="form-group col-md-8">

      <div class="form-group col-md-4">
        <label>Nome do Visitante</label>
      </div>
      <div class="form-group col-md-8">
          <input type="text" class="form-control" name="nomeVisitante" id="nomeVisitante">
      </div>

      <div class="form-group col-md-4">
        <label>Tipo de Documento</label>
      </div>
      <div class="form-group col-md-8">
        <select class="form-control" name="tipoDocumento" id="tipoDocumento"><option>Bilhete de Identidade</option></select>
      </div>

      <div class="form-group col-md-4">
        <label>No. Documento</label>
      </div>
      <div class="form-group col-md-8">
        <input type="text" class="form-control" name="nrDoc" id="nrDoc">
      </div>

      <div class="form-group col-md-4">
        <label>Data da Visita</label>
      </div>
      <div class="form-group col-md-8">
        <input type="date" min="2014-01-01" class="form-control" name="bday" id="bday" required>
      </div>

      <div class="form-group col-md-4">
        <label>Local da Visita</label>
      </div>
      <div class="form-group col-md-8">
        <select class="form-control" name="local" id="local">
        <option>Nenhum</option>
        <option>Patio</option>
        <option>Dormitorio</option>
        </select>
      </div>

      <div class="form-group col-md-4">
        <label>Assunto</label>
      </div>
      <div class="form-group col-md-8">
          <textarea cols="26" rows="5" class="form-control" placeholder="Deixe ficar o assunto aqui" name="assunto" id="assunto"></textarea>
      </div>
    </section>
                   
                   
               

            </div>
                 <div id="actions" class=""  style="margin-left: 76%">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Submeter</button>
                        
                    </div>
                 </div>
            </form>
            </div>




    
        <br/><br/><br/><br/>
        <br/><br/><br/><br/>
        <p style="text-align: justify; padding-left: 5px; width: 250px; float:right">
        <b style="font-size: 20px">Localização:</b><br/> <br/>
        <b>Província:</b> Maputo<br/>
        <b>Avenida:</b></br>
        <b>Paragem próxima:</b>
        </p>

        <br/><br/><br/><br/><br/><br/>

@endsection