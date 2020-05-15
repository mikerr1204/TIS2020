@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center primary-color">
    <h5>Detalles de Rol</h5>
</div>
<div class="d-flex justify-content-center">
    <table class="table table-bordered">
        <thead class="">
            <tr>
                <th><strong>Código</strong></th>
                <td>{{$role->id}}</td>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <th><strong>Nombre</strong></th>
                <td>{{$role->name}}</td>
            </tr>
            <tr class="">
                <th><strong>Descripción</strong></th>
                <td>{{$role->description}}</td>
            </tr>
            <tr class="">
                <th><strong>Acceso</strong></th>
                <td>
                    @if ($role->special == null)
                        Acceso Especial                                    
                    @else
                        @if ($role->special == 'all-access')
                            Acceso Total
                        @else
                            @if ($role->special == 'no-access')
                                Sin Acceso (visitante)
                            @endif
                        @endif
                    @endif
                </td>
            </tr>
            <tr class="">
                <th><strong>Pribilegios</strong></th>
                <td>
                    @foreach ($role->permissions as $permission)
                        <li>{{$permission->name}}</li>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection