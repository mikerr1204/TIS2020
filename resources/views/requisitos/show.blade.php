@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Requisito</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr>
                <td>Detalle</td>
                <td>{{$requisito->detalle}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection