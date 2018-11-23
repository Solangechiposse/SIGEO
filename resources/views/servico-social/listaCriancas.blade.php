@extends('layouts.appServSoc')
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

  <form id="formDoacao" method="post" action="{{ url('crianca') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  </br>
  <div id="main" class="container-fluid">
    <div id="actions" class="row">
      <div class="col-md-12">
        <a href="{{ url('servico-social/cadCrianca') }}"  class="btn btn-primary">Registar Crianca</a>
      </div>
    </div>
   <h3 class="page-header form-group col-md-12" align="center">Criancas Registadas</h3>
<!-- Seccao da tabela-->
<section class="form-group col-md-12">
    <div class="panel panel-default">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped tableBodyScroll">
            <thead>
              <tr >
                  <th class="titulo">ID</th>
                  <th class="titulo">Nome</th>
                  <th class="titulo">Data de Nascimento</th>
                  <th class="titulo">Genero</th>
                  <th class="titulo">Proveniencia</th>
                  <th class="titulo">Nivel</th>
                  <th class="titulo">Data de Entrada</th>
                  <th class="titulo">Nome do responsavel</th>
                  <th class="titulo">Contacto</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $value)
              <tr>
                  <td >{{ $value->id }}</td>
                  <td >{{ $value->nomeCrianca }}</td>
                  <td >{{ $value->bday }}</td>
                  <td >{{ $value->genero }}</td>
                  <td >{{ $value->proveniencia }}</td>
                  <td >{{ $value->nivel }}</td>
                  <td >{{ $value->created_at }}</td>
                  <td >{{ $value->nomeResponsavel }}</td>
                  <td >{{ $value->contactoResp }}</td>
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
