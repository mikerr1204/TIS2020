@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Requisito</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        @include('opcion.validacion')
        @include('opcion.confirmacion')
        <form action="{{ route('requisitos.update', $requisito->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <label for="roles">Convocatoria</label>
                    <select class="custom-select" id="convocatoria_id" name="convocatoria_id">
                        <option value="{{$requisito->convocatoria->id}}"> {{$requisito->convocatoria->titulo}} </option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="detalle" required>{{$requisito->detalle}}</textarea>
                        <label for="message">Detalle *</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection