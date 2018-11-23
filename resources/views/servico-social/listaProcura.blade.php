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

   <h3 class="page-header form-group col-md-12" align="center">Criancas Desaparecidas</h3>
<!-- Seccao da tabela-->
<section class="form-group col-md-12">
    <div class="panel panel-default">
      <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr >
                  <th class="titulo">Nome</th>
                  <th class="titulo">Alcunha</th>
                  <th class="titulo">Idade</th>
                  <th class="titulo">Genero</th>
                  <th class="titulo">Escola</th>
                  <th class="titulo">Data</th>
                  <th class="titulo">Pai</th>
                  <th class="titulo">Mae</th>
                  <th class="titulo">Caracteristicas</th>
                  <th class="titulo">Bairro</th>
                  <th class="titulo">N Casa</th>
                  <th class="titulo">Contacto</th>
              </tr>
            </thead>
            <tbody>
            @foreach($procuras as $value)
              <tr>
                  <td >{{ $value->nome }}</td>
                  <td >{{ $value->alcunha }}</td>
                  <td >{{ $value->idade }}</td>
                  <td >{{ $value->genero }}</td>
                  <td >{{ $value->escola }}</td>
                  <td >{{ $value->data }}</td>
                  <td >{{ $value->pai }}</td>
                  <td >{{ $value->mae }}</td>
                  <td >{{ $value->caracteristicas }}</td>
                  <td >{{ $value->bairro }}</td>
                  <td >{{ $value->nCasa }}</td>
                  <td >{{ $value->contacto }}</td>
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
