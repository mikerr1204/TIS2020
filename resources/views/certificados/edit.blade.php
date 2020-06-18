@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Puntaje</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        @include('opcion.validacion')
        @include('opcion.confirmacion')
        <form action="{{ route('certificados.update', $certificado->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <label for="puntaje">Puntaje</label>
                    <select class="custom-select" id="puntaje" name="puntaje">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection