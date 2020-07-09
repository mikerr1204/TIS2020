@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar Meritos</h3>
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
                @can('puntajes.index')
                    <th class="text-center">
                        <strong>Ver items</strong>
                    </th>
                @endcan
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
                    @can('puntajes.index')
                        <td class="text-center" width="10px">
                            <a href="{{ route('puntajes.index', $merito->id) }}">
                                <button class="btn btn-dark px-3 btn-sm"><i class="fas fa-eye"></i></button>
                            </a>
                        </td>
                    @endcan
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
@endsection