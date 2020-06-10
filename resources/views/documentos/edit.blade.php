@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Documento a Presentar</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        @include('opcion.validacion')
        @include('opcion.confirmacion')
        <form action="{{ route('documentos.update', $documento->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <label for="roles">Convocatoria</label>
                    <select class="custom-select" id="convocatoria_id" name="convocatoria_id">
                        <option value="{{$documento->convocatoria->id}}"> {{$documento->convocatoria->titulo}} </option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="descripcion" required>{{$documento->descripcion}}</textarea>
                        <label for="message">Descripcion *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <select class="browser-default custom-select" name="importancia">
                        <option selected value="No Obligatorio">No Obligatorio</option>
                        <option value="Obligatorio">Obligatorio</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection