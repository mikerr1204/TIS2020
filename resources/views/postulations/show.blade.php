@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Convocatoria</h3>
    </div>
    <div class="col">
        <div class="d-flex justify-content-end">
            @can('archivos.create')
                <button type="button" class="btn btn-success btn-sm"data-toggle="modal" data-target="#modalPostulArchivo">Subir Archivo</button>
            @endcan
            @can('certificados.create')
                <button type="button" class="btn btn-success btn-sm"data-toggle="modal" data-target="#modalPostulMerito">Subir Merito</button>
            @endcan
        </div>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    @include('opcion.error')
    @include('opcion.validacion')
    @include('opcion.confirmacion')
    <article class="article p-4 m-4 z-depth-1">
        <h2 class="article__title">{{ $postulation->convocatoria->titulo }}</h2>
        <div class="article__content">{{ $postulation->convocatoria->description }}</div>
        <div>
            <h4><strong>Documnetos a Presentar</strong></h4>
            <ul>
                @foreach ($postulation->convocatoria->documentos as $documento)
                    <li>{{$documento->descripcion}} - {{$documento->importancia}}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <h4><strong>Documnetos subitos</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Titulo</th>
                        <th>Archivo</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postulation->archivos as $archivo)
                        <tr>
                            <td>{{ $archivo->documento->descripcion }}</td>
                            <td>
                                <a href="{{ $archivo->file }}" download="{{ $archivo->documento->descripcion }}">Descargar</a>
                            </td>
                            @can('archivos.destroy')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('archivos.destroy', $archivo->id) }}" method="POST">
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
        <div>
            <h4><strong>Meritos</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>
                            <strong>Tipo</strong>
                        </th>
                        <th>
                            <strong>Clase</strong>
                        </th>
                        <th>
                            <strong>Detalle</strong>
                        </th>
                        <th>
                            <strong>Puntaje</strong>
                        </th>
                        <th>
                            <strong>Importancia</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postulation->convocatoria->meritos as $merito)
                        <tr>
                            <td>{{$merito->tipo}}</td>
                            <td>{{$merito->clase}}</td>
                            <td>{{$merito->detalle}}</td>
                            <td>{{$merito->puntos}}</td>
                            <td>{{$merito->importancia}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4><strong>Meritos subitos</strong></h4>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Titulo</th>
                        <th>Archivo</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postulation->certificados as $certificado)
                        <tr>
                            <td>{{ $certificado->name}}</td>
                            <td>
                                <a href="{{ $certificado->file }}" download="{{ $certificado->name }}">Descargar</a>
                            </td>
                            @can('certificados.destroy')
                                <td class="text-center" width="10px">
                                    <form action="{{ route('certificados.destroy', $certificado->id) }}" method="POST">
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
    </article>
</div>

<div class="modal fade" id="modalPostulArchivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('archivos.create')
        </div>
    </div>
</div>
<div class="modal fade" id="modalPostulMerito" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('certificados.create')
        </div>
    </div>
</div>
@endsection