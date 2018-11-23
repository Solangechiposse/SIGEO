
@extends('layouts.appServSoc')

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
    <div id="main" class="container-fluid">
        <h3 class="page-header form-group col-md-12" align="center">Ficha de registo de Crianca</h3>
        <i><h5>{{Session::get('success')}}</h5></i>
        <form method="POST" action="{{url('cadCrianca')}}">
        {{ csrf_field() }}
            <!-- Dados da Crianca-->
            <div id="top" class="row">
                <!-- Seccao dos dados-->
                <section class="form-group col-md-8">
                <i><h5>{{Session::get('success')}}</h5></i>
                    <div class="form-group col-md-4 my-labels">
                        <label>Nome da Crianca</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="nomeCrianca" id="nomeCrianca" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Nascimento</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="bday" min="2001-01-01" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Entrada</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="entradaDay" min="2001-01-01" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Nivel Academico</label>
                    </div>
                    <div class="form-group col-md-6">
                        <select class="form-control" name="nivel">
                            <option>Nenhum</option>
                            <option>5.o ano</option>
                            <option>7.o ano</option>
                            <option>10.o ano</option>
                            <option>12.o ano</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Proveniencia</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="proveniencia" id="proveniencia" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Genero:</label>
                    </div>
                    <div class="form-group col-md-6 ">

                        <div class="form-group col-md-2">
                            <input type="radio" id="Masc" value="F"  name="genero" class="form-control"/>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Masculino</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="radio" id="Fem" value="F" name="genero" class="form-control"/>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Femenino</label>
                        </div>
                    </div>
                </section>

                <!-- Seccao da foto-->
                <section class="form-group col-md-4">
                    <div class="form-group col-md-12">
                        <img src="{{ asset('img/crianca.jpg')}}" width="400" class="img-fluid"/>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="submit" value="Capturar" class="form-control btn btn-primary"/>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="submit" value="Carregar" class="form-control btn btn-primary"/>
                    </div>
                </section>

            </div>

            <div id="main" class="container-fluid">
                <h3 class="page-header form-group col-md-12" align="center">Dados do responsavel da Crianca</h3>
                <div id="top" class="row">
                    <!-- Seccao dos dados-->
                    <section class="form-group col-md-8">
                        <div class="form-group col-md-4 my-labels">
                            <label>Nome</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="nomeResponsavel" id="nomeResponsavel" required>
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Bairro</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="bairro" id="bairro" required>
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Quarteirao</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="quarteirao" id="quarteirao">
                        </div>
                    </section>


                    <!-- Lado direito-->
                    <section class="form-group col-md-4">
                        <div class="form-group col-md-4 my-labels">
                            <label>Contacto</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="contactoResp " name="contactoResp" required>
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>N.da casa </label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="nCasa" name="nCasa">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Rua</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="rua" name="rua">
                        </div>

                    </section>

                </div>

            </div>


                <hr/>
                <div id="actions" class="row pull-right" style="margin-right: 3%">
                    <div class="col-md-12">
                      <a href="{{ url('cadCrianca') }}" class="btn btn-primary"  align="left">Ver Lista</a>
                      <button type="submit" class="btn btn-primary" align="right">Salvar</button>
                      <a href="" class="btn btn-default" align="right">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>

@endsection
