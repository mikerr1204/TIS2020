@extends('layouts.app')

@section('content')
<h3>Registro de postulante</h3>
<div class="d-flex justify-content-center">
  <form action="{{ route('postulantes.store') }}" method="POST" class="text-center">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="col">
        <div class="md-form mt-3 mb-3">
          <input type="text" id="materialRegisterFormName" class="form-control" name='name' value="{{ old('name') }}" required>
          <label for="materialRegisterFormName">Nombre *</label>
        </div>
      </div>
      <div class="col">
        <div class="md-form mt-3 mb-3">
          <input type="text" id="materialRegisterFormApellido" class="form-control" name='apellido' value="{{ old('apellido') }}" required>
          <label for="materialRegisterFormApellido">Apellido *</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <div class="md-form mt-3 mb-3">
          <input type="text" id="materialRegisterFormSis" class="form-control" name='sis' value="{{ old('sis') }}" required>
          <label for="materialRegisterFormSis">Codigo SIS *</label>
        </div>
      </div>
      <div class="col">
        <div class="md-form mt-3 mb-3">
          <input type="text" id="materialRegisterFormCi" class="form-control" name='ci' value="{{ old('ci') }}" required>
          <label for="materialRegisterFormCi">CI *</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <div class="md-form mb-1">
          <input type="email" id="materialRegisterFormEmail" class="form-control" aria-describedby="materialRegisterFormEmailHelpBlock" name='email' value="{{ old('email') }}" required>
          <label for="materialRegisterFormEmail">Email *</label>
        </div>
      </div>
      <div class="col">
        <div class="md-form mb-1">
          <input type="password" pattern="[0-9]{7,7}" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name='ci' value="{{ old('ci') }}" required>
          <label for="materialRegisterFormPassword">Password *</label>
        </div>
      </div>
    </div>
    <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
  </form>
</div>
@endsection