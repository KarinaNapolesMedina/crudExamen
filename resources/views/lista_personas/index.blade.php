MOSTRAR LA LISTA DE LAS PEERSONAS :)
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Sexo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($lista_personas as $lista_personas)
        <tr>
            <td>{{$lista_personas->id}}</td>
            <td>{{$lista_personas->ApellidoPaterno}}</td>
            <td>{{$lista_personas->ApellidoMaterno}}</td>
            <td>{{$lista_personas->Nombre}}</td>
            <td>{{$lista_personas->Fecha}}</td>
            <td>{{$lista_personas->Sexo}}</td>
            <td>
                
                <form action="{{url('/lista_personas/'.$lista_personas->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return" confirm("¿Quieres borrar?")" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>