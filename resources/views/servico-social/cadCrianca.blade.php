
@extends('layouts.app')

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
        <form action="">
            <!-- Dados da Crianca-->
            <div id="top" class="row">
                <!-- Seccao dos dados-->
                <section class="form-group col-md-8">
                    <div class="form-group col-md-4 my-labels">
                        <label>Nome da Crianca</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="nomeCrianca" id="nomeCrianca">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Nascimento</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="bday" min="2001-01-01" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Entrada</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="EntradaDay" min="2001-01-01" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Nivel Academico</label>
                    </div>
                    <div class="form-group col-md-6">
                        <select class="form-control">
                            <option>Nenhum</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Proveniencia</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="proveniencia" id="proveniencia">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Genero:</label>
                    </div>
                    <div class="form-group col-md-6 ">

                        <div class="form-group col-md-2">
                            <input type="radio" id="Masc" name="genero" class="form-control"/>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Masculino</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="radio" id="Fem" name="genero" class="form-control"/>
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
                            <input type="text" class="form-control" name="nomeResponsavel" id="nomeResponsavel">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Bairro</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="bairro" id="bairro">
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
                            <input type="text" class="form-control" id="contactoResponsavel">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>N.da casa </label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="casaResponsavel">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Rua</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="ruaResponsavel">
                        </div>

                    </section>

                </div>

            </div>


                <hr/>
                <div id="actions" class="row pull-right" style="margin-right: 3%">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>

@endsection
