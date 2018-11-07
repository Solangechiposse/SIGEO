

@section('content')


<form>
    <h1 align="center"> Ficha de registo de Funcionario</h1>
    <div id="top">
        <section class="painelLeft">
            <label>Nome funcionario</label><br/><br/>
            <label>Data de Nascimento</label><br/><br/>
            <label>Area de Formacao</label><br/><br/>
            <label>Sector (ocupacao)</label><br/><br/>
            <label>Genero:</label><br/><br/>
            <label>Data de inicio</label><br/><br/>
            <label>Data de Reforma</label><br/><br/>
            <label>Proveniencia</label><br/><br/>
        </section>

        <section class="painelCenter">
            <input type="text" class="fieldSize"> <br/>
            <input type="date" name="bday" min="1960-01-01" class="fieldSize"><br/>
            <input type="text" class="fieldSize"><br/>
            <select class="fieldSize" ><option>Nenhum</option></select><br/>
            <input type = "radio" id= "Masc" name= "genero" /><label>Masculino<label> &nbsp&nbsp&nbsp
            <input type = "radio" id= "Fem" name= "genero"/><label>Femenino</label> <br/><br/>
            <input type="date" name="bday" min="1990-01-01" class="fieldSize"><br/>
            <input type="date" name="bday" min="2000-01-01" class="fieldSize"><br/>
            <input type="text" class="fieldSize"><br/>
        </section>

        <section class="painelRight">
            <img  src="crianca.jpg" width="170"/> <br/><br/>
            <input type = "submit" value ="Capturar" class="btn" />
        </section>
    </div>
    <br/>


    <h1 align="center">Endereco</h1>
    <div id="bottom">
        <section class="painelLeft">
            <label>Email </label><br/></br>
            <label>Bairro</label><br/></br>
            <label>Quarteirao</label><br/></br>
        </section>

        <section class="painelCenter">
            <input type="search"> <br/><br/>
            <input type="text">  <br/><br/>
            <input type="text"> <br/><br/>
        </section>

        <section class="painelLeft">
            <label>Contacto</label><br/><br/>
            <label>N.o Casa </label><br/><br/>
            <label>Rua</label><br/><br/>
        </section>

        <section class="painelRight">
            <input type="text"><br/><br/>
            <input type="text"> <br/><br/>
            <input type="text"> <br/><br/>
        </section>
    </div>

    <br/>
    <input type = "submit" value ="Gravar" class="btn btnPosition"  />
    <input type = "reset" value ="Cancelar" class="btn" />



</form>
@endsection
