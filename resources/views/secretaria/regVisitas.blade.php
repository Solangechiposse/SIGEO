@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection
@section('content')
<div id="main" class="container-fluid">
 <h3 class="page-header form-group col-md-4" align="center">Registo de Visitas</h3>
 <h3 class="page-header form-group col-md-8" align="center">Ultimas Visitas</h3>
  <form method="post" action="{{ url('visitas') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <!-- area de campos do form -->
  <div class="row">
    <!-- Seccao dos dados-->
    <section class="form-group col-md-5">

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
        <input type="date" min="2014-01-01" class="form-control" name="bday" id="bday">
      </div>

      <div class="form-group col-md-4">
        <label>Local da Visita</label>
      </div>
      <div class="form-group col-md-8">
        <select class="form-control" name="local" id="local"><option>Nenhum</option></select>
      </div>

      <div class="form-group col-md-4">
        <label>Assunto</label>
      </div>
      <div class="form-group col-md-8">
          <textarea cols="26" rows="5" class="form-control" name="assunto" id="assunto"></textarea>
      </div>
    </section>



<!-- Seccao da tabela-->
<section class="form-group col-md-7">
    <div class="panel panel-default">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr >
                  <th class="titulo">Nome</th>
                  <th class="titulo">Tipo de Doc</th>
                  <th class="titulo">No. Doc</th>
                  <th class="titulo">Data</th>
                  <th class="titulo">Local</th>
                  <th class="titulo">Assunto</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td ></td>
                  <td ></td>
                  <td ></td>
                  <td ></td>
                  <td ></td>
                  <td ></td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
</section>

</div>

  <hr />
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
</div>
@endsection
