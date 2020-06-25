@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar Puntajes de una Convocatoria</h3>
    </div>
    @can('puntajes.create')
        <div class="col">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success btn-sm"data-toggle="modal" data-target="#modalLogin-{{ $convocatoria->id }}">Nuevo</button>
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
                    <strong>Descripcion</strong>
                </th>
                <th>
                    <strong>Valor</strong>
                </th>
                @can('puntajes.show')
                    <th class="text-center">
                        <strong>Ver</strong>
                    </th>
                @endcan
                @can('puntajes.edit')
                    <th class="text-center">
                        <strong>Editar</strong>
                    </th>
                @endcan
                @can('puntajes.destroy')
                    <th class="text-center">
                        <strong>Eliminar</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($puntajes as $puntaje)
                <tr>
                    <td>{{$puntaje->descripcion}}</td>
                    <td>{{$puntaje->valor}}</td>
                    @can('puntajes.show')
                        <td class="text-center" width="10px">
                            <form action="{{ route('puntajes.show', $puntaje->id) }}" method="GET">
                                <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </form>
                        </td>
                    @endcan
                    @can('puntajes.edit')
                        <td class="text-center" width="10px">
                            <form action="{{ route('puntajes.edit', $puntaje->id) }}" method="GET">
                                <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                    @endcan
                    @can('puntajes.destroy')
                        <td class="text-center" width="10px">
                            <form action="{{ route('puntajes.destroy', $puntaje->id) }}" method="POST">
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