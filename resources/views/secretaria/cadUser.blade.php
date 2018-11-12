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
        <h3 class="page-header form-group col-md-12" align="center">Ficha de registo de Funcionario</h3>
        <form action="">
            <!-- Dados do Funcionario-->
            <div id="top" class="row">
                <!-- Seccao dos dados-->
                <section class="form-group col-md-8">
                    <div class="form-group col-md-4 my-labels">
                        <label>Nome funcionario</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="nomeFuncionario">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Nascimento</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="bday" min="1960-01-01" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Area de Formacao</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control">
                    </div>

                    
                    <div class="form-group col-md-4 my-labels">
                        <label>Sector </label>
                    </div>
                    <div class="form-group col-md-6">
                        <select class="form-control">
                            <option>Nenhum</option>
                        </select>
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

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de inicio</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="bday" min="1990-01-01" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data de Reforma</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="bday" min="2000-01-01" class="form-control">
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
                            <input type="text" class="form-control" id="email-do-funcionario">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Bairro</label>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control">
                                <option>Nenhum</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Quarteirao</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </section>


                    <!-- Lado direito-->
                    <section class="form-group col-md-4">
                        <div class="form-group col-md-4 my-labels">
                            <label>Contacto</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="contacto-funcionario">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>N.da casa </label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="numero-da-casa">
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
                        <input type="password" class="form-control" id="palavra-passe">
                    </div>
                </section>


                <hr/>
                <div id="actions" class="row pull-right" style="margin-right: 3%">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br><br><br>

        <div class="row col-md-8 " style="margin-left:8%">
            <h2>Lista</h2><br>
            <h4 class="form-group col-md-8"> <label> Funcionario 1 </label> </h4>
            <div class="col-md-4">
                <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" value="editar">
                <input type="button" class="btn btn-danger" value="eliminar">
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">--}}
        {{--Launch demo modal--}}
    {{--</button>--}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .my-labels {
        margin-left: 10%;
    }
</style>