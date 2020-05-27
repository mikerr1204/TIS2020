@extends('layouts.app')

@section('content')
<h3>Listar Convocatoria</h3>
<div class="d-flex justify-content-center">
    <table class="table table-sm table-hover">
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
                    <th class="text-center">
                        <strong>Inscribirse</strong>
                    </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($convocatorias as $convocatoria)
                <tr>
                    <td>{{$convocatoria->titulo}}</td>
                    <td>{{$convocatoria->fechaIni}}</td>
                    <td>{{$convocatoria->fechaFin}}</td>
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
                        <td class="text-center" width="10px">
                            <form action="{{ route('postulantes.convocatoria.subscribe', $convocatoria->id) }}" method="GET">
                                <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection