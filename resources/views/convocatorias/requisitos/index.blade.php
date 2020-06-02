@extends('layouts.app')

@section('content')
<h3>Listar Requisitos</h3>
<div class="d-flex justify-content-end" style="padding:0 10px 10px">
    <a href="{{ route('requisitos.create', $convocatoria_id) }}">
        <button type="button" class="btn btn-success" type="submit">
            Agregar Requisito
        </button>
    </a>
</div>

<div class="d-flex justify-content-center">
    <table class="table table-sm table-hover">
        <thead class="thead-light">
            <tr>
                <th>
                    <strong>Detalles</strong>
                </th>
                <th>
                    <strong>Obligatorio</strong>
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
            @foreach ($requisitos as $requisito)
                <tr>
                    <td>{{$requisito->detalles}}</td>
                    <td>{{$requisito->obligatorio}}</td>
                        <td class="text-center" width="10px">
                            <form action="{{ route('requisitos.show', $requisito->id) }}" method="GET">
                                <button class="btn btn-info px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </form>
                        </td>
                        <td class="text-center" width="10px">
                            <form action="{{ route('requisitos.edit', $requisito->id) }}" method="GET">
                                <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                        <td class="text-center" width="10px">
                            <form action="{{ route('requisitos.destroy', $requisito->id) }}" method="POST">
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