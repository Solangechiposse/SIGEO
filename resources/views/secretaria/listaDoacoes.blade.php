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

  <form id="formDoacao" method="post" action="{{ url('doacoes') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  </br>
  <div id="main" class="container-fluid">
    <div id="actions" class="row">
      <div class="col-md-12">
        <a href="{{ url('doacoes.create') }}"  class="btn btn-primary">Registar Doacao</a>
      </div>
    </div>
   <h3 class="page-header form-group col-md-12" align="center">Doacoes Realizadas</h3>
<!-- Seccao da tabela-->
<section class="form-group col-md-12">
    <div class="panel panel-default">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped tableBodyScroll">
            <thead>
              <tr >
                  <th class="titulo">ID</th>
                  <th class="titulo">Tipo Doador</th>
                  <th class="titulo">Tipo Doacao</th>
                  <th class="titulo">Quantidade</th>
                  <th class="titulo">Data</th>
                  <th class="titulo">Descricao</th>
                    <th class="titulo">Accao</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $value)
              <tr>
                  <td >{{ $value->id }}</td>
                  <td >{{ $value->tipoDoador }}</td>
                  <td >{{ $value->tipoDoacao }}</td>
                  <td >{{ $value->quantidade }}</td>
                  <td >{{ $value->created_at }}</td>
                  <td >{{ $value->descricao }}</td>
                  <td >
                    <div id="actions" class="row">
                      <div class="col-md-12">
                        <a href="{{ url('doacoes.edit') }}" class="btn btn-primary" >Editar</button>
                        <a href="{{ url('doacoes.delete') }}" class="btn btn-danger" >Eliminar</a>
                      </div>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
</section>
</div>
</form>
</div>
@endsection
