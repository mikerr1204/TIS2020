@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar archivos de documentos</h3>
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
                    <strong>ID</strong>
                </th>
                <th>
                    <strong>Titulo</strong>
                </th>
                <th>
                    <strong>Estado de validacion</strong>
                </th>
                @can('requisitos.show')
                    <th class="text-center">
                        <strong>Ver documento</strong>
                    </th>
                @endcan
                @can('requisitos.edit')
                    <th class="text-center">
                        <strong>Validacion</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($archivos as $archivo)
                <tr>
                    <td>{{$archivo->id}}</td>
                    <td>{{$archivo->titulo}}</td>
                    @if($archivo->validacion == 'cumple')
                        <td style="color: green;">Validado.</td>
                    @elseif($archivo->validacion == 'no cumple')
                        <td style="color: red;">No cumple.</td>
                    @else
                        <td style="color: grey;">En revision.</td>
                    @endif
                    @can('requisitos.show')
                        <td class="text-center" width="10px">
                            <a href=" {{ route('archivos.viewPDF', $archivo->id) }} ">
                                <button class="btn px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </a>
                        </td>
                    @endcan
                    @can('requisitos.edit')
                        <td class="text-center" width="10px">
                            <a href=" {{ route('archivos.edit', $archivo->id) }} ">
                                <button class="btn btn-warning btn-sm" type="submit">Validar postulacion</button>
                            </a>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection