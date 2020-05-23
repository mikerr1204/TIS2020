@extends('layouts.app')

@section('content')
<h3>Editar Convocatoria</h3>
<div class="d-flex justify-content-center">
    <form action="{{ route('convocatorias.update', $convocatoria->id) }}" method="POST" class="text-center">
        {{ csrf_field() }}
        {{ @method_field('PUT') }}
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="text" pattern="[A-Za-z]{4,30}" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="titulo" value="{{$convocatoria->titulo}}" required autofocus>
                    <label for="materialRegisterFormName">Titulo *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <textarea type="text" id="message" rows="2" class="form-control md-textarea" name="description" value="{{ old('description') }}" required></textarea>
                    <label for="message">Descripción *</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="date" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="fechaIni" value="{{$convocatoria->fechaIni}}" required autofocus>
                    <label for="materialRegisterFormName">Fecha de inicio *</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form mb-1">
                    <input type="date" id="materialRegisterFormNDescripción" class="form-control" aria-describedby="materialRegisterFormNDescripciónHelpBlock" name="fechaFin" value="{{$convocatoria->fechaFin}}" required autofocus>
                    <label for="materialRegisterFormNDescripción">Fecha final *</label>
                </div>
            </div>
        </div>
        <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
    </form>
</div>
@endsection