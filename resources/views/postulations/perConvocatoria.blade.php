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
                @can('certificados.index')
                    <th>
                        <strong>Ver archivos</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($postulations as $postulation)
                <tr>
                    <td>{{$postulation->id}}</td>
                    <td>{{$postulation->user_id}}</td>
                    @can('certificados.index')
                        <td class="text-center" width="10px">
                            <a href="{{ route('certificados.index', $postulation->id) }}">
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