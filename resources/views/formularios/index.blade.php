@extends('layouts.app')

@section('content')
<h3>Lista de formularios en la convocatoria</h3>

<div class="d-flex justify-content-center">
    <table class="table table-sm table-hover">
        <thead class="thead-light">
            <tr>
                <th>
                    <strong>Nombre</strong>
                </th>
                <th>
                    <strong>Carrera</strong>
                </th>
                <th class="text-center">
                    <strong>Ver</strong>
                </th>
                <th class="text-center">
                    <strong>Editar</strong>
                </th>
                <th class="text-center">
                    <strong>Eliminar</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formularios as $formulario)
                <tr>
                    <td>{{$formulario->nombre}}</td>
                    <td>{{$carrera->carrera}}</td>
                        <td class="text-center" width="10px">
                            <form action="{{ route('formularios.show', $formulario->convocatoria_id) }}" method="GET">
                                <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </form>
                        </td>
                        <td class="text-center" width="10px">
                            <form action="{{ route('formularios.edit', $formulario->convocatoria_id) }}" method="GET">
                                <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                        <td class="text-center" width="10px">
                            <form action="{{ route('formularios.destroy', $formulario->convocatoria_id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger px-3 btn-sm" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection