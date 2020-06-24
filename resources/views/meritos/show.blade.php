@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Merito</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr>
                <td>Tipo</td>
                <td>{{$merito->tipo}}</td>
            </tr>
            <tr>
                <td>Clase</td>
                <td>{{$merito->clase}}</td>
            </tr>
            <tr>
                <td>Detalle</td>
                <td>{{$merito->detalle}}</td>
            </tr>
            <tr>
                <td>Puntaje</td>
                <td>{{$merito->puntos}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection