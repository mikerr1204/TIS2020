@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Convocatoria</h3>
    </div>
    <div class="col">
        <div class="d-flex justify-content-end">
            @can('comisionario.view')
                <a href="convocatorias/{$convocatoria->id}/certificados">
                <button type="button" class="btn btn-success btn-sm">Ver Meritos</button>
            @endcan
            @can('postulations.create')
                <button type="button" class="btn btn-success btn-sm"data-toggle="modal" data-target="#modalPostulForm">Postularme</button>
            @endcan
        </div>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    @include('opcion.error')
    @include('opcion.validacion')
    @include('opcion.confirmacion')
    <article class="article p-4 m-4 z-depth-1">
        <h2 class="article__title">{{ $convocatoria->titulo }}</h2>
        <div class="article__content">{{ $convocatoria->description }}</div>
        <div>
            <h4><strong>Requerimientos</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>
                            <strong>Items</strong>
                        </th>
                        <th>
                            <strong>Cantidad</strong>
                        </th>
                        <th>
                            <strong>Horas Academicas</strong>
                        </th>
                        <th>
                            <strong>Destino</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requerimientos as $requerimiento)
                        <tr>
                            <td>{{$requerimiento->items}}</td>
                            <td>{{$requerimiento->cantidad}}</td>
                            <td>{{$requerimiento->hrsAcademic}}</td>
                            <td>{{$requerimiento->materia->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4><strong>Requisitos</strong></h4>
            <ul>
                @foreach ($requisitos as $requisito)
                    <li>{{$requisito->detalle}}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <h4><strong>Documnetos a Presentar</strong></h4>
            <ul>
                @foreach ($documentos as $documento)
                    <li>{{$documento->descripcion}} - {{$documento->importancia}}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <h4><strong>Fecha de Pruebas</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>
                            <strong>Evento</strong>
                        </th>
                        <th>
                            <strong>Hora de Inicio</strong>
                        </th>
                        <th>
                            <strong>Fecha de Inicio</strong>
                        </th>
                        <th>
                            <strong>Hora de Fin</strong>
                        </th>
                        <th>
                            <strong>Fecha de Fin</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fechas as $fecha)
                        <tr>
                            <td>{{$fecha->evento}}</td>
                            <td>{{$fecha->horaIni}}</td>
                            <td>{{$fecha->fechaIni}}</td>
                            <td>{{$fecha->horaFin}}</td>
                            <td>{{$fecha->fechaFin}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4><strong>Meritos</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>
                            <strong>Tipo</strong>
                        </th>
                        <th>
                            <strong>Clase</strong>
                        </th>
                        <th>
                            <strong>Detalle</strong>
                        </th>
                        <th>
                            <strong>Puntaje</strong>
                        </th>
                        <th>
                            <strong>Importancia</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($meritos as $merito)
                        <tr>
                            <td>{{$merito->tipo}}</td>
                            <td>{{$merito->clase}}</td>
                            <td>{{$merito->detalle}}</td>
                            <td>{{$merito->puntos}}</td>
                            <td>{{$merito->importancia}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </article>
</div>


<div class="modal fade" id="modalPostulForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('postulations.create')
        </div>
    </div>
</div>
@endsection