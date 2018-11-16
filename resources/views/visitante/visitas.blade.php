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
        <h3 class="page-header form-group col-md-12" align="center">Ficha de Marcacao de Visitas</h3>
         <form action="">
            <!-- Dados do Funcionario-->
            <div id="top" class="row">
                <!-- Seccao dos dados-->
                <section class="form-group col-md-8">
                    <div class="form-group col-md-4 my-labels">
                        <label>Nome do visitante</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="nomeFuncionario">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Email</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="bday" placeholder="betolas3@example.com" class="form-control">
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Area da visita</label>
                    </div>
                    <div class="form-group col-md-6">
                         <select class="form-control">
                            <option>Nenhum</option>
                            <option>Instalacoes</option>
                            <option>Dormitorio</option>
                             <option>Patio</option><br/>
                        </select>
                    </div>

                    
                    <div class="form-group col-md-4 my-labels">
                        <label>Data</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" name="bday" min="2010-01-01" class="form-control">
                       
                    </div>

                    <div class="form-group col-md-4 my-labels">
                        <label>Assunto</label>
                    </div>
                    <div class="form-group col-md-6 ">

                        <textarea cols="62" rows="5" placeholder="Deixe ficar o assunto aqui..."></textarea>
                    </div>

                   
                   
               

            </div>
                 <div id="actions" class=""  style="margin-left: 44%">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="" class="btn btn-default">Cancelar</a>
                    </div>
                 </div>
            </form>
            </div>










































    
        <br/>
        <p style="text-align: justify; padding-left: 5px; width: 250px; float:right">
        <b style="font-size: 20px">Localização:</b><br/> <br/>
        <b>Província:</b> Maputo<br/>
        <b>Avenida:</b></br>
        <b>Paragem próxima:</b>
        </p>

        <br/><br/><br/><br/><br/><br/>

@endsection