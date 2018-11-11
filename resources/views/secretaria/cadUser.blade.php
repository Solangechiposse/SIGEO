@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection
@section('content')
<<<<<<< HEAD
<div id="main" class="container-fluid">
 <h3 class="page-header form-group col-md-12" align="center">Ficha de registo de Funcionario</h3>
  <form action="index.html">

  <!-- Dados do Funcionario-->
  <div id="top" class="row">
    <!-- Seccao dos dados-->
    <section class="form-group col-md-8">
      <div class="form-group col-md-4">
        <label>Nome funcionario</label>
      </div>
      <div class="form-group col-md-8">
        <input type="text" class="form-control" id="nomeFuncionario">
      </div>

      <div class="form-group col-md-4">
        <label>Data de Nascimento</label>
      </div>
      <div class="form-group col-md-8">
        <input type="date" name="bday" min="1960-01-01" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label>Area de Formacao</label>
      </div>
      <div class="form-group col-md-8">
        <input type="text" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label>Sector (ocupacao)</label>
      </div>
      <div class="form-group col-md-8">
        <select class="form-control" ><option>Nenhum</option></select>
      </div>

      <div class="form-group col-md-4">
        <label>Genero:</label>
      </div>
      <div class="form-group col-md-8">
        <div class="form-group col-md-4">
          <label>Masculino<label>
        </div>
        <div class="form-group col-md-2">
          <input type = "radio" id= "Masc" name= "genero" class="form-control"/>
        </div>
        <div class="form-group col-md-4">
          <label>Femenino</label>
        </div>
        <div class="form-group col-md-2">
          <input type = "radio" id= "Fem" name= "genero" class="form-control"/>
        </div>
      </div>

      <div class="form-group col-md-4">
        <label>Data de inicio</label>
      </div>
      <div class="form-group col-md-8">
        <input type="date" name="bday" min="1990-01-01" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label>Data de Reforma</label>
      </div>
      <div class="form-group col-md-8">
        <input type="date" name="bday" min="2000-01-01" class="form-control">
      </div>
    </section>

<!-- Seccao da foto-->
<section class="form-group col-md-4">
  <div class="form-group col-md-12">
    <img  src="{{ asset('img/crianca.jpg')}}" width="400" class="img-fluid"/>
  </div>
  <div class="form-group col-md-6">
    <input type = "submit" value ="Capturar" class="form-control btn btn-primary" />
  </div>
  <div class="form-group col-md-6">
    <input type = "submit" value ="Carregar" class="form-control btn btn-primary" />
  </div>
</section>

</div>

  <hr />
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.html" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
</div>
=======

>>>>>>> 065e9e1a8ca4cbc3cbf8f866a87c2dcddc05f75f
@endsection
