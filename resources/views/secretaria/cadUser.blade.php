@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" >
@endsection


@section('content')
    <div id="main" class="container-fluid">
        <h3 class="page-header form-group col-md-12" align="center">Ficha de registo de Funcionario</h3>
        <form  method="post" action="{{ route('register') }}" >
            <!-- Dados do Funcionario-->
            <div id="top" class="row">
                <!-- Seccao dos dados-->
                <section class="form-group col-md-8">
                    <div class="form-group col-md-4 my-labels">
                        <label>Nome funcionario</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Nascimento</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="bday" id="bday" min="1960-01-01" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Area de Formacao</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="formacao" id="formacao" class="form-control">
                    </div>

                    
                    <div class="form-group col-md-4 my-labels">
                        <label>Sector (ocupacao)</label>
                    </div>
                    <div class="form-group col-md-6">
                        <select name="ocupacao" id="ocupacao" class="form-control">
                            <option>Nenhum</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Genero:</label>
                    </div>
                    <div class="form-group col-md-6 ">

                        <div class="form-group col-md-2">
                            <input type="radio" id="genero" name="genero" class="form-control"/>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Masculino</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="radio" id="genero" name="genero" class="form-control"/>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Femenino</label>
                        </div>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de inicio</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="data-inicio" id="data-inicio" min="1990-01-01" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Reforma</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="data-reforma" id="data-reforma" min="2000-01-01" class="form-control">
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
            {{--</form>--}}
            {{--</div>--}}


            <div id="main" class="container-fluid">
                <h3 class="page-header form-group col-md-12" align="center">Ficha de Endereco</h3>
            {{--<form action="index.html">--}}
            <!-- Endereco do Funcionario-->
                <div id="top" class="row">
                    <!-- Seccao dos dados-->
                    <section class="form-group col-md-8">
                        <div class="form-group col-md-4 my-labels">
                            <label>Email</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email-do-funcionario" id="email-do-funcionario">
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
                            <input type="text" name="quarteirao" id="quarteirao" class="form-control">
                        </div>
                    </section>


                    <!-- Lado direito-->
                    <section class="form-group col-md-4">
                        <div class="form-group col-md-4 my-labels">
                            <label>Contacto</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" name="contacto" :id="contacto" class="form-control">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>N.da casa </label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" name="numero-da-casa" :id="numero-da-casa" class="form-control" id="numero-da-casa">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Rua</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="rua-do-funcionario">
                        </div>

                    </section>

                </div>


                {{--</form>--}}
            </div>

            <div id="main" class="container-fluid">
                <h3 class="page-header form-group col-md-12" align="center">Acesso ao Sistema</h3>
                {{--<form action="index.html">--}}

                <div class="form-group col-md-4 my-labels">
                    <label>Trabalha com o sistema?</label>
                </div>
                <div class="form-group col-md-6 ">

                    <div class="form-group col-md-2">
                        <input type="radio" id="Masc" name="genero" class="form-control"/>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Sim</label>
                    </div>

                    <div class="form-group col-md-2">
                        <input type="radio" id="Fem" name="genero" class="form-control"/>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Nao</label>
                    </div>
                </div>
                <section class="form-group col-md-8">
                    <div class="form-group col-md-4 my-labels">
                        <label>Nome do usuario</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="usuario">
                    </div>
                </section>

                <section class="form-group col-md-4">
                    <div class="form-group col-md-4 my-labels">
                        <label>Palavra-passe</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" name="palavra-passe" id="palavra-passe">
                    </div>
                    <div class="form-group col-md-4 my-labels">
                        <label>Confirmacao de Palavra-Passe</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" name="confirmacao" id="confirmacao">
                    </div>
                </section>


                <hr/>
                <div id="actions" class="row pull-right" style="margin-right: 3%">
                    <div class="col-md-12">
                        <button type= "submit" class="btn btn-primary">Salvar</button>
                        <a href="index.html" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br><br><br>
    </div>
@endsection

<style>
    .my-labels {
        margin-left: 10%;
    }
</style>