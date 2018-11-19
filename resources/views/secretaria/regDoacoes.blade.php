@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>

</style>

@section('scripts')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>

<script type="text/javascript">

</script>
@show

@section('content')
<div id="main" class="container-fluid">
 <h3 class="page-header form-group col-md-12" align="center">Registo de Doacao</h3>
  <form id="formDoacao" method="post" action="{{ url('doacoes') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <!-- area de campos do form -->
  <div class="row">
    <!-- Seccao dos dados-->
    <section class="form-group col-md-12">

      <div class="form-group col-md-4">
        <label>Tipo Doador</label>
      </div>
      <div class="form-group col-md-8">
        <select class="form-control" name="tipoDoador" id="tipoDoador"><option>Singular</option></select>
      </div>

      <div class="form-group col-md-4">
        <label>Tipo Doacao</label>
      </div>
      <div class="form-group col-md-8">
        <select class="form-control" name="tipoDoacao" id="tipoDoacao"><option>Vestuario</option></select>
      </div>

      <div class="form-group col-md-4">
        <label>Quantidade</label>
      </div>
      <div class="form-group col-md-8">
        <input type="number" name="quantity" min="1"  class="form-control" name="quantity" id="quantity">
      </div>

      <div class="form-group col-md-4">
        <label>Descricao</label>
      </div>
      <div class="form-group col-md-8">
        <textarea cols="26" rows="5" class="form-control" name="descricao" id="descricao"></textarea>
      </div>
    </section>
</div>

  <hr />
  <div id="actions" class="row">
    <div class="col-md-12">
      <a href="{{ url('doacoes') }}" class="btn btn-primary"  align="left">Ver Lista</a>
      <button type="submit" class="btn btn-primary" align="right">Salvar</button>
      <a href="" class="btn btn-default" align="right">Cancelar</a>
    </div>
  </div>
</form>
</div>
@endsection
