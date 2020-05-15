@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center primary-color">
    <h5>Lista de Roles</h5>
</div>
<div class="d-flex justify-content-center">
    <table class="table table-sm table-hover">
        <thead class="thead-light">
            <tr>
                <th>
                    <strong>Nombre</strong>
                </th>
                <th>
                    <strong>Descripción</strong>
                </th>
                @can('roles.show')
                    <th class="text-center">
                        <strong>Ver</strong>
                    </th>
                @endcan
                @can('roles.edit')
                    <th class="text-center">
                        <strong>Editar</strong>
                    </th>
                @endcan
                @can('roles.destroy')
                    <th class="text-center">
                        <strong>Eliminar</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td>{{$role->description}}</td>
                    @can('roles.show')
                        <td class="text-center" width="10px">
                            <form action="{{ route('roles.show', $role->slug) }}" method="GET">
                                <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </form>
                        </td>
                    @endcan
                    @can('roles.edit')
                        <td class="text-center" width="10px">
                            <form action="{{ route('roles.edit', $role->slug) }}" method="GET">
                                <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                    @endcan
                    @can('roles.destroy')
                        <td class="text-center" width="10px">
                            <form action="{{ route('roles.destroy', $role->slug) }}" method="POST">
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