@extends('layouts.sistema')

@section('content')
<pre id="pre">
<table class="table table-striped "border=0  >
        <tr>
            <td>N°</td>
             <td>Gerencia</td>
            <td>P00</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>disfrutado</td>
            <td>Desde</td>
            <td>Hasta</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
    </tr>
    @if (isset($result)>0)
           @foreach($result as $lista)
               <td>{{$lista->numero}}</td>
               <td>{{$lista->gerencia}}</td>
               <td>{{$lista->codigo_empleado}}</td>
               <td>{{$lista->nombres}}</td>
               <td>{{$lista->apellidos}}</td>
               <td>{{$lista->disfrutado}}</td>
               <td>{{$lista->desde}}</td>
               <td>{{$lista->hasta}}</td>

                <td><a href="{{ url('consulta/'.$lista->id)}}">Modificar</a></td>
                <td><a href="{{ url('delete/'.$lista->id)}}">delete</a></td></tr>


            @endforeach

@endif


    </tr>

    </table>
    </pre>
    <a href="{{ url('/vacaciones') }}" class="btn btn-primary">retornar </a>
@endsection
