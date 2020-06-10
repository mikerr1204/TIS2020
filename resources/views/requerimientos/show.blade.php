@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Requerimiento</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr>
                <td>Items</td>
                <td>{{$requerimiento->items}}</td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td>{{$requerimiento->cantidad}}</td>
            </tr>
            <tr>
                <td>Horas Academicas</td>
                <td>{{$requerimiento->hrsAcademic}}</td>
            </tr>
            <tr>
                <th>Destino</th>
                <td>{{$requerimiento->materia->name}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection