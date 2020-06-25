@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Puntaje</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr>
                <td>Descripcion</td>
                <td>{{$puntaje->descripcion}}</td>
            </tr>
            <tr>
                <td>Valor</td>
                <td>{{$puntaje->valor}}</td>
            </tr>
            <tr>
                <td>Convocatoria</td>
                <td>{{$puntaje->convocatoria_id}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection