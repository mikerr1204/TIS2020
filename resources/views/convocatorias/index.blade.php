@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar Convocatoria</h3>
    </div>
    @can('convocatorias.create')
        <div class="col">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success btn-sm"data-toggle="modal" data-target="#modalLoginForm">Nuevo</button>
            </div>
        </div>
    @endcan
</div>
<div style="position: relative; height: 480px; margin-top: .5rem; overflow: auto;">
    @include('opcion.error')
    @include('opcion.validacion')
    @include('opcion.confirmacion')
    <table class="table table-sm table-hover table-bordered">
        <thead class="thead-light">
            <tr>
                <th>
                    <strong>Titulo</strong>
                </th>
                <th>
                    <strong>Inicio</strong>
                </th>
                <th>
                    <strong>Fin</strong>
                </th>
                @can('postulations.index')
                    <th class="text-center">
                        <strong>Postulaciones</strong>
                    </th>
                @endcan
                @can('convocatorias.show')
                    <th class="text-center">
                        <strong>Ver</strong>
                    </th>
                @endcan
                @can('convocatorias.edit')
                    <th class="text-center">
                        <strong>Editar</strong>
                    </th>
                @endcan
                @can('convocatorias.destroy')
                    <th class="text-center">
                        <strong>Eliminar</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($convocatorias as $convocatoria)
                <tr>
                    <td>{{$convocatoria->titulo}}</td>
                    <td>{{$convocatoria->fechaIni}}</td>
                    <td>{{$convocatoria->fechaFin}}</td>
                    @can('postulations.index')
                        <td class="text-center" width="10px">
                            <a href="{{ route('postulations.perConvocatoria', $convocatoria->id) }}">
                                <button class="btn btn-dark btn-sm">Ver postulaciones</button>
                            </a>
                        </td>
                    @endcan
                    @can('convocatorias.show')
                        <td class="text-center" width="10px">
                            <form action="{{ route('convocatorias.show', $convocatoria->id) }}" method="GET">
                                <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </form>
                        </td>
                    @endcan
                    @can('convocatorias.edit')
                        <td class="text-center" width="10px">
                            <form action="{{ route('convocatorias.edit', $convocatoria->id) }}" method="GET">
                                <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                    @endcan
                    @can('convocatorias.destroy')
                        <td class="text-center" width="10px">
                            <form action="{{ route('convocatorias.destroy', $convocatoria->id) }}" method="POST">
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


<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('convocatorias.create')
        </div>
    </div>
</div>
@endsection