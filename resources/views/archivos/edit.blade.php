@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Validar Documento</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        <form action="{{ route('archivos.validar', $archivo->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <label for="roles">Validacion</label>
                    <select class="browser-default custom-select" id="validacion" name="validacion">
                        <option value="en revision"> En revision </option>
                        <option value="cumple"> Cumple </option>
                        <option value="no cumple"> No cumple </option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Validar</button>
            </div>
        </form>
    </div>
</div>
@endsection