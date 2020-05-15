@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center primary-color">
    <h5>Detalles de Usuario</h5>
</div>
<div class="d-flex justify-content-center">
    <table class="table table-bordered mt-3">
        <tbody>
            <tr class="">
                <th><strong>Nombre</strong></th>
                <th>{{$user->name}}</th>
            </tr>
            <tr class="">
                <th><strong>Email</strong></th>
                <th>{{$user->email}}</th>
            </tr>
            <tr class="">
                <th><strong>Password</strong></th>
                <th>{{$user->password}}</th>
            </tr>
            <tr class="">
                <th><strong>Rol</strong></th>
                <th>
                    @foreach ($user->roles as $rol)
                        <li>{{$rol->name}}</li>
                    @endforeach
                </th>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection