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

  <form id="formDoacao" method="post" action="{{ url('visitas') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  </br>
  <div id="main" class="container-fluid">
    <div id="actions" class="row">
      <div class="col-md-12">
        <a href="{{ url('visitas.create') }}"  class="btn btn-primary">Registar Visitas</a>
      </div>
    </div>
   <h3 class="page-header form-group col-md-12" align="center">Visitas Marcadas e Efectuadas</h3>
<!-- Seccao da tabela-->
<section class="form-group col-md-12">
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
            @foreach($data as $value)
              <tr>
                  <td >{{ $value->Nome }}</td>
                  <td >{{ $value->tipoDocumento }}</td>
                  <td >{{ $value->nrDoc }}</td>
                  <td >{{ $value->bday }}</td>
                  <td >{{ $value->local }}</td>
                  <td >{{ $value->assunto }}</td>
                  <td >
                    <div id="actions" class="row">
                      <div class="col-md-12">
                        <a href="{{ url('visitas.edit') }}" class="btn btn-primary" >Editar</button>
                        <a href="{{ url('visitas.delete') }}" class="btn btn-danger" >Eliminar</a>
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
