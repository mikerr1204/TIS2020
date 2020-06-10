@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar Fecha de Eventos</h3>
    </div>
</div>
<div style="position: relative; height: 480px; margin-top: .5rem; overflow: auto;">
    @include('opcion.error')
    @include('opcion.validacion')
    @include('opcion.confirmacion')
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
@endsection