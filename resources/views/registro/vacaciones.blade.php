@extends('layouts.sistema')

@section('content')
<h1>Registro de vacaciones del Personal</h1>
<br>
<br>


<div class="registro1">
    <form action="vaciones" method="GET" autocomplete ="off" >
        <section>
            <table class="table table-dark table-striped"" border=0 style=" margin-left:15px;">
                <tr>
                    <td><label for="">Numero:</label></td>
                    <td><input type="text" name="numero" placeholder="N°"></td>
                    <td><label for="">Gerencia:</label></td>
                    <td><input type="text" name="gerencia" placeholder="Gerencia"></td>
                    <td><label for="">Codigo Emp:</label></td>
                    <td><input type="text" name="codigo_empleado" placeholder="P00"></td>

                </tr>
            </table>
            <table class="table table-striped" border=2>
                <tr>
                    <td><label for="">Nombres</label></td>
                    <td><input type="text" name="nombres" placeholder="Nombre Completo"></td>
                    <td><label for="">Apellidos</label></td>
                    <td><input type="text" name="apellidos" placeholder="Apellido Completo"></td>
                    <td><label for="">Dias Disfrutados</label></td>
                    <td><input type="text" name="disfrutado" placeholder="Dias Disfrutado"></td>
                </tr>



                </tr>
            </table>
            <table style="margin-left:200px;" align=center class="table table-striped" border=2>

                <tr>
                    <td><label for="">Desde</label></td>
                    <td><input type="date" name="desde" placeholder="Desde"></td>
                    <td><label for="">Hasta</label></td>
                    <td><input type="date" name="hasta" placeholder="Hasta"></td>

                </tr>
                <br>
            </table>
            <br>
            <br>

            <table class="table2" >
                <tr>
                    <td><input type="submit" name="registrar" value="Registrar"
                            class="btn btn-primary btn-user btn-block"></td>
                    <td> <a href="{{ url('/view') }}" class="btn btn-primary">Consultar </a></td>

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
