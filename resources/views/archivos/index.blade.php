@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Listar archivos de documentos</h3>
    </div>
</div>

@can('requisitos.edit')
<div class="col">
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-warning btn-sm"data-toggle="modal" data-target="#modalPostulRequisito">Validar Postulacion</button>
    </div>
</div>
@endcan

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
                @can('requisitos.show')
                    <th class="text-center">
                        <strong>Ver documento</strong>
                    </th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($archivos as $archivo)
                <tr>
                    <td>{{$archivo->id}}</td>
                    @can('requisitos.show')
                        <td class="text-center" width="10px">
                            <a href=" {{ route('archivos.viewPDF', $archivo->id) }} ">
                                <button class="btn px-3 btn-sm" type="submit"><i class="fas fa-eye"></i></button>
                            </a>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="modalPostulRequisito" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('postulations.edit')
        </div>
    </div>
</div>
@endsection