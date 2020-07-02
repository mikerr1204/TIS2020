@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar postulaciones por convocatoria</h3>
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
                    <strong>ID del postulante</strong>
                </th>
                <th>
                    <strong>Cumple con requisitos</strong>
                </th>
                @can('certificados.index')
                    <th>
                        <strong>Ver meritos</strong>
                    </th>
                @endcan
                @can('requisitos.index')
                    <th>
                        <strong>Ver documentos</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($postulations as $postulation)
                <tr>
                    <td>{{$postulation->id}}</td>
                    <td>{{$postulation->user_id}}</td>
                    @if($postulation->validacion == 'cumple')
                        <td style="color: green;">{{$postulation->validacion}}</td>
                    @elseif($postulation->validacion == 'no cumple')
                        <td style="color: red;">{{$postulation->validacion}}</td>
                    @else
                        <td style="color: grey;">{{$postulation->validacion}}</td>
                    @endif
                    @can('certificados.index')
                        <td class="text-center" width="10px">
                            <a href="{{ route('certificados.index', $postulation->id) }}">
                                <button class="btn btn-info px-3 btn-sm"><i class="fas fa-eye"></i></button>
                            </a>
                        </td>
                    @endcan
                    @can('requisitos.index')
                        <td class="text-center" width="10px">
                            <a href="{{ route('archivos.index', $postulation->id) }}">
                                <button class="btn btn-info px-3 btn-sm"><i class="fas fa-eye"></i></button>
                            </a>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection