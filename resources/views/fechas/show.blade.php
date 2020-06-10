@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Evento</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr>
                <td>Evento</td>
                <td>{{$fecha->evento}}</td>
            </tr>
            <tr>
                <td>Hora de Inicio</td>
                <td>{{$fecha->horaIni}}</td>
            </tr>
            <tr>
                <td>Fecha de Inicio</td>
                <td>{{$fecha->fechaIni}}</td>
            </tr>
            <tr>
                <td>Hora de Fin</td>
                <td>{{$fecha->horaFin}}</td>
            </tr>
            <tr>
                <td>Fecha de Fin</td>
                <td>{{$fecha->fechaFin}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection