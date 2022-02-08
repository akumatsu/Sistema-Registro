@extends('layouts.sistema')

@section('content')
<h1>Registro de vacaciones del Personal</h1>
<br>
<br>


<div class="registro1">
    <form action="update" method="GET">
        <section>
            <table class="table table-dark table-striped"" border=0 style=" margin-left:15px;">
                <tr>
                    <td><label>Numero:</label></td>
                    <td><input type="text" name="numero" value="{{$result->numero}}"></td>
                    <td><label for="">Gerencia:</label></td>
                    <td><input type="text" name="gerencia" value="{{$result->gerencia}}"></td>
                    <td><label for="">Codigo Emp:</label></td>
                    <td><input type="text" name="codigo_empleado" value="{{$result->codigo_empleado}}"></td>

                </tr>
            </table>
            <table class="table table-striped" border=2>
                <tr>
                    <td><label for="">Nombres</label></td>
                    <td><input type="text" name="nombres" value="{{$result->nombres}}"></td>
                    <td><label for="">Apellidos</label></td>
                    <td><input type="text" name="apellidos" value="{{$result->apellidos}}"></td>
                    <td><label for="">Dias Disfrutados</label></td>
                    <td><input type="text" name="disfrutado" value="{{$result->disfrutado}}"></td>
                </tr>



                </tr>
            </table>
            <table style="margin-left:200px;" align=center class="table table-striped" border=2>

                <tr>
                    <td><label for="">Desde</label></td>
                    <td><input type="date" name="desde" value="{{$result->desde}}"></td>
                    <td><label for="">Hasta</label></td>
                    <td><input type="date" name="hasta" value="{{$result->hasta}}"></td>

                </tr>
                <br>
            </table>
            <br>
            <br>

            <table class="table2">
                <tr>
                    <td><input type="submit" value="actualizar" class="btn btn-primary btn-user btn-block"></td>

                </tr>

            </table>
        </section>

        <br>
        <div class="registro2">

            <!--  <a href="{{ url('/view') }}" class="btn btn-primary">Retornar</a>-->


        </div>

</div>




</form>

@endsection
