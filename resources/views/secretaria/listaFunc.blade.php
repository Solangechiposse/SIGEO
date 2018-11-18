@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row col-md-8 " style="margin-left:8%">
            <h2>Lista De Funcionarios</h2><br>
            <h4 class="form-group col-md-8"> <label> Funcionario 1 </label> </h4>
            <div class="col-md-4">
                <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" value="editar">
                <input type="button" class="btn btn-danger" value="eliminar">
            </div>
        </div>
</div>
@endsection
