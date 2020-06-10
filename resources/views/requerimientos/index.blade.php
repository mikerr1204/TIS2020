@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar Requerimientos</h3>
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
                    @can('requerimientos.show')
                        <td class="text-center" width="10px">
                            <form action="{{ route('requerimientos.show', $requerimiento->id) }}" method="GET">
                                <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </form>
                        </td>
                    @endcan
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
@endsection