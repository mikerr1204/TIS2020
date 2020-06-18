@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Convocatoria</h3>
    </div>
    <div class="col">
        <div class="d-flex justify-content-end">
            @can('convocatorias.create')
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalRequeForm">Add Reque.</button>
                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalRequiForm">Add Requi.</button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalDocuForm">Add Docu.</button>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalFechaForm">Ad Evento.</button>
                <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#modalMeritoForm">Add Meritos.</button>
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
                        @can('requerimientos.show')
                            <th class="text-center">
                                <strong>Ver</strong>
                            </th>
                        @endcan
                        @can('requerimientos.edit')
                            <th class="text-center">
                                <strong>Editar</strong>
                            </th>
                        @endcan
                        @can('requerimientos.destroy')
                            <th class="text-center">
                                <strong>Eliminar</strong>
                            </th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requerimientos as $requerimiento)
                        <tr>
                            <td>{{$requerimiento->items}}</td>
                            <td>{{$requerimiento->cantidad}}</td>
                            <td>{{$requerimiento->hrsAcademic}}</td>
                            <td>{{$requerimiento->materia->name}}</td>
                            @can('requerimientos.edit')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('requerimientos.edit', $requerimiento->id) }}" method="GET">
                                        <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('requerimientos.destroy')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('requerimientos.destroy', $requerimiento->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger px-3 btn-sm" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4><strong>Requisitos</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>
                            <strong>Detalle</strong>
                        </th>
                        @can('requisitos.show')
                            <th class="text-center">
                                <strong>Ver</strong>
                            </th>
                        @endcan
                        @can('requisitos.edit')
                            <th class="text-center">
                                <strong>Editar</strong>
                            </th>
                        @endcan
                        @can('requisitos.destroy')
                            <th class="text-center">
                                <strong>Eliminar</strong>
                            </th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requisitos as $requisito)
                        <tr>
                            <td>{{$requisito->detalle}}</td>
                            @can('requisitos.show')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('requisitos.show', $requisito->id) }}" method="GET">
                                        <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('requisitos.edit')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('requisitos.edit', $requisito->id) }}" method="GET">
                                        <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('requisitos.destroy')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('requisitos.destroy', $requisito->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger px-3 btn-sm" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4><strong>Documnetos a Presentar</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>
                            <strong>Descripción</strong>
                        </th>
                        <th>
                            <strong>Importancia</strong>
                        </th>
                        @can('documentos.show')
                            <th class="text-center">
                                <strong>Ver</strong>
                            </th>
                        @endcan
                        @can('documentos.edit')
                            <th class="text-center">
                                <strong>Editar</strong>
                            </th>
                        @endcan
                        @can('documentos.destroy')
                            <th class="text-center">
                                <strong>Eliminar</strong>
                            </th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentos as $documento)
                        <tr>
                            <td>{{$documento->descripcion}}</td>
                            <td>{{$documento->importancia}}</td>
                            @can('documentos.show')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('documentos.show', $documento->id) }}" method="GET">
                                        <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('documentos.edit')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('documentos.edit', $documento->id) }}" method="GET">
                                        <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('documentos.destroy')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('documentos.destroy', $documento->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger px-3 btn-sm" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                        @can('fechas.show')
                            <th class="text-center">
                                <strong>Ver</strong>
                            </th>
                        @endcan
                        @can('fechas.edit')
                            <th class="text-center">
                                <strong>Editar</strong>
                            </th>
                        @endcan
                        @can('fechas.destroy')
                            <th class="text-center">
                                <strong>Eliminar</strong>
                            </th>
                        @endcan
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
                            @can('fechas.show')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('fechas.show', $fecha->id) }}" method="GET">
                                        <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('fechas.edit')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('fechas.edit', $fecha->id) }}" method="GET">
                                        <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('fechas.destroy')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('fechas.destroy', $fecha->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger px-3 btn-sm" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            @endcan
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
                        @can('meritos.show')
                            <th class="text-center">
                                <strong>Ver</strong>
                            </th>
                        @endcan
                        @can('meritos.edit')
                            <th class="text-center">
                                <strong>Editar</strong>
                            </th>
                        @endcan
                        @can('meritos.destroy')
                            <th class="text-center">
                                <strong>Eliminar</strong>
                            </th>
                        @endcan
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
                            @can('meritos.show')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('meritos.show', $merito->id) }}" method="GET">
                                        <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('meritos.edit')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('meritos.edit', $merito->id) }}" method="GET">
                                        <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                                    </form>
                                </td>
                            @endcan
                            @can('meritos.destroy')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('meritos.destroy', $merito->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger px-3 btn-sm" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </article>
</div>


<div class="modal fade" id="modalRequeForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('requerimientos.create')
        </div>
    </div>
</div>
<div class="modal fade" id="modalRequiForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('requisitos.create')
        </div>
    </div>
</div>
<div class="modal fade" id="modalDocuForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('documentos.create')
        </div>
    </div>
</div>
<div class="modal fade" id="modalFechaForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('fechas.create')
        </div>
    </div>
</div>
<div class="modal fade" id="modalMeritoForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('meritos.create')
        </div>
    </div>
</div>
@endsection