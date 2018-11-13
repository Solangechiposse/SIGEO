@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection
@section('content')
<div id="main" class="container-fluid">
 <h3 class="page-header form-group col-md-4" align="center">Registo de Doacao</h3>
 <h3 class="page-header form-group col-md-8" align="center">Doacoes Realizadas</h3>
  <form method="post" action="{{ url('doacoes') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <!-- area de campos do form -->
  <div class="row">
    <!-- Seccao dos dados-->
    <section class="form-group col-md-4">

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

<!-- Seccao da tabela-->
<section class="form-group col-md-8">
    <div class="panel panel-default">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr >
                  <th class="titulo">ID</th>
                  <th class="titulo">Tipo Doador</th>
                  <th class="titulo">Tipo Doacao</th>
                  <th class="titulo">Quantidade</th>
                  <th class="titulo">Data</th>
                  <th class="titulo">Descricao</th>
              </tr>
            </thead>
            <tbody>
              @foreach($lista as $doacao)
              <tr>
                  <td >{{$doacao['id']}}</td>
                  <td >{{$doacao['tipoDoador']}}</td>
                  <td >{{$doacao['tipoDoacao']}}</td>
                  <td >{{$doacao['quantidade']}}</td>
                  <td >{{$doacao['descricao']}}</td>
                  <td >{{$doacao['created_at']}}</td>
              </tr>
              @endforeach
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
