@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Editar Requerimiento</h3>
    </div>
</div>
<div class="row justify-content-md-center m-0" style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <div class="col col-lg-6 col-sm-12">
        @include('opcion.error')
        @include('opcion.validacion')
        @include('opcion.confirmacion')
        <form action="{{ route('requerimientos.update', $requerimiento->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
                <div class="col">
                    <label for="roles">Convocatoria</label>
                    <select class="custom-select" id="convocatoria_id" name="convocatoria_id">
                        <option value="{{$requerimiento->convocatoria->id}}"> {{$requerimiento->convocatoria->titulo}} </option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="number"  id="materialRegisterFormItem" class="form-control" aria-describedby="materialRegisterFormItemHelpBlock" name="items" value="{{$requerimiento->items}}" required autofocus>
                        <label for="materialRegisterFormItem">Items *</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="number"  id="materialRegisterFormCant" class="form-control" aria-describedby="materialRegisterFormCantHelpBlock" name="cantidad" value="{{$requerimiento->cantidad}}" required autofocus>
                        <label for="materialRegisterFormCant">Cantidad *</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="number"  id="materialRegisterFormHrs" class="form-control" aria-describedby="materialRegisterFormHrsHelpBlock" name="hrsAcademic" value="{{$requerimiento->hrsAcademic}}" required autofocus>
                        <label for="materialRegisterFormHrs">Hrs Academicas *</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="roles">Materias</label>
                    <select class="custom-select" id="materia_id" name="materia_id">
                    @foreach ($materias as $materia)
                        <option value="{{$materia->id}}"> {{$materia->name}} </option>
                    @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection