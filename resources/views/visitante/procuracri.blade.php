@extends('layouts.templateVisitante')
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
        <h3 class="page-header form-group col-md-12" style="margin-left:5%;">Dados da crianca desaparecida</h3>
         <i><h5>{{Session::get('success')}}</h5></i>
        <form method="POST" action="{{url('procuracri')}}">
        {{ csrf_field() }}
            <!-- Dados do Funcionario-->
            <div id="top" class="row">
                <!-- Seccao dos dados-->

                <section class="form-group col-md-6">

                    <div class="form-group col-md-4 my-labels">
                        <label>Nome da crianca</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Nome de alcunha</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="alcunha" id="alcunha" min="1960-01-01" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Idade</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" name="idade" id="idade" class="form-control" required>
                    </div>


                    <div class="form-group col-md-4 my-labels">
                        <label>Nome da escola</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="escola" id="escola" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Genero:</label>
                    </div>
                    <div class="form-group col-md-6 ">

                        <div class="form-group col-md-2">
                            <input type="radio" id="Masc" value="M" name="genero" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Masculino</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="radio" id="Fem" value="F" name="genero" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Femenino</label>
                        </div>
                    </div>

                     <div class="form-group col-md-4 my-labels">
                        <label>Local do desaparecimento</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="localDesaparecimento" id="localDesaparecimento" required >
                    </div>



                </section>

                <!-- Seccao da foto-->
                <section class="form-group col-md-6">
                  <!--  <div class="form-group col-md-12">
                        <img src="{{ asset('img/crianca.jpg')}}" width="200" class="img-fluid"/>
                    </div>-->
                    <div class="form-group col-md-4 my-labels">
                        <label>Foto da crianca</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="file" value="Capturar" name="foto" id="foto" class="form-control btn btn-primary"/>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Data do desaparecimento</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="data" id="data" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Nome do pai</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="pai" id="pai" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Nome da mae</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="mae" id="mae" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Caracteristicas da crianca</label>
                    </div>
                    <div class="form-group col-md-6">
                        <textarea name="caracteristicas" id="caracteristicas" class="form-control" rows="5" placeholder="aqui devera ser introduzida informacao sobre o traje da crianca, aparencia..." required></textarea>
                    </div>




                </section>

            </div>
            {{--</form>--}}
            {{--</div>--}}


            <div id="main" class="container-fluid">
                <h3 class="page-header form-group col-md-12" style="margin-left:5%;">Dados da pessoa que procura a crianca</h3>
            {{--<form action="index.html">--}}
            <!-- Endereco do Funcionario-->
                <div id="top" class="row">
                    <!-- Seccao dos dados-->
                    <section class="form-group col-md-6">
                        <div class="form-group col-md-4 my-labels">
                            <label>Nome</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="pessoaProcura" id="pessoaProcura" required>
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Local de trabalho</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="trabalho" id="trabalho" class="form-control">
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Grau de parentesco</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="parentesco" id="parentesco" class="form-control" required>
                        </div>
                    </section>


                    <!-- Lado direito-->
                    <section class="form-group col-md-6">
                        <div class="form-group col-md-4 my-labels">
                            <label>Bairro</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="bairro" id="bairro" class="form-control" >
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>N.da casa </label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="ncCasa" id="nCasa" class="form-control" >
                        </div>

                        <div class="form-group col-md-4 my-labels">
                            <label>Contacto</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="contacto" id="contacto" required>
                        </div>

                    </section>

                </div>


                {{--</form>--}}
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
        <br>
        <br><br><br>


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
