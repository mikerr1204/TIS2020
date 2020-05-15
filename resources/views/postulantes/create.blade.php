@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center primary-color">
    <h5>Registro de postulante</h5>
</div>
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
              <input type="text" pattern="[0-9]{7,7}" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name='ci' value="{{ old('ci') }}" required>
              <label for="materialRegisterFormPassword">Password *</label>
            </div>
          </div>
        </div>
        <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
    </form>
</div>
@endsection