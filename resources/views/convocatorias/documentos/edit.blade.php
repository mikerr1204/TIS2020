@extends('layouts.app')

@section('content')
<h3>Editar Documento</h3>
<div class="d-flex justify-content-center">
    <form action="{{ route('documentos.update', $documentos->id) }}" method="POST" class="text-center">
        {{ csrf_field() }}
        {{ @method_field('PUT') }}
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="detalles" value="{{ $documentos->detalles }}" required></textarea>
                    <label for="message">Detalles *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <h5 style="padding-right:20px;">Obligatorio:</h5>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="obligatorio" value="si">Si
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="obligatorio" value="no">No
                </label>
            </div>
        </div>
        <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
    </form>
</div>
@endsection