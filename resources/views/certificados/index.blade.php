@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar Certificados</h3>
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
                    <strong>Nombre</strong>
                </th>
                <th>
                    <strong>ID</strong>
                </th>
                <th>
                    <strong>Puntaje</strong>
                </th>
                @can('certificados.edit')
                    <th class="text-center">
                        <strong>Editar Puntaje</strong>
                    </th>
                @endcan
                @can('archivos.show')
                    <th class="text-center">
                        <strong>Ver archivo</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($certificados as $certificado)
                <tr>
                    <td>{{$certificado->name}}</td>
                    <td>{{$certificado->id}}</td>
                    <td>{{$certificado->puntaje}}</td>
                    @can('certificados.edit')
                        <td class="text-center" width="10px">
                            <form action="{{ route('certificados.edit', $certificado->id) }}" method="GET">
                                <button class="btn btn-warning px-3 btn-sm" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                    @endcan
                    @can('archivos.show')
                        <td class="text-center" width="10px">
                            <a href=" {{ route('certificados.viewPDF', $certificado->id) }} ">
                                <button class="btn px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </a>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection