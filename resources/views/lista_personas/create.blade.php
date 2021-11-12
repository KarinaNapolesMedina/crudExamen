Formulario de las personas
<form action="{{url('/lista_personas')}}" method="post" enctype="multipar/form-data">
@csrf
    <label for="Apellido Paterno">Apellido Paterno</label>
    <input type="text" name="Apellido Paterno" id="ApellidoPaterno">
    <br>
    
    <label for="Apellido Materno">Apellido Materno</label>
    <input type="text" name="Apellido Materno" id="ApellidoMaterno">
    <br>
    
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    
    <label for="Fecha de nacimiento">Fecha de nacimiento</label>
    <input type="date" name="Fecha de nacimiento" id="Fecha">
    <br>
    
    <label for="Sexo">Sexo</label>
    <select name="Sexo" id="Sexo">
        <option selected>Masculino</option>
        <option>Femenino</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Guardar datos">
</form>