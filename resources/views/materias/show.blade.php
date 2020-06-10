@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Materia</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr>
                <td>Codigo</td>
                <td>{{$materia->codigo}}</td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>{{$materia->name}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection