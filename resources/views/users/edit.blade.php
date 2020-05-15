@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center primary-color">
    <h5>Editar Usuario</h5>
</div>
<div class="d-flex justify-content-center">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="text-center" style="color: #757575;">
        {{ csrf_field() }}
        {{ @method_field('PUT') }}
        <div class="form-row">
            <div class="col">
                <div class="md-form mt-3 mb-3">
                <input type="text"  id="materialRegisterFormName" class="form-control" name='name' value="{{$user->name}}" required>
                <label for="materialRegisterFormName">Nombre</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form mb-1">
                    <input type="email" id="materialRegisterFormEmail" class="form-control" aria-describedby="materialRegisterFormEmailHelpBlock" name='email' value="{{$user->email}}" required autofocus>
                    <label for="materialRegisterFormEmail">Email</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form mb-1">
                    <input type="text" pattern="[0-9]{7,7}" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name='password' value="{{$user->ci}}" required>
                    <label for="materialRegisterFormPassword">Password</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="roles">Rol</label>
                <select class="custom-select" id="roles" name="roles">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}"> {{$role->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
    </form>
</div>
@endsection