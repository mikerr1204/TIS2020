@extends('layouts.app')

@section('content')
<div class="row m-0">
    <div class="col">
        <h3>Detalles de Rol</h3>
    </div>
</div>
<div style="position: relative; height: 450px; margin-top: .5rem; overflow: auto;">
    <table class="table table-sm table-hover table-bordered">
        <tbody>
            <tr>
                <th><strong>Código</strong></th>
                <td>{{$role->id}}</td>
            </tr>
            <tr>
                <th><strong>Nombre</strong></th>
                <td>{{$role->name}}</td>
            </tr>
            <tr>
                <th><strong>Descripción</strong></th>
                <td>{{$role->description}}</td>
            </tr>
            <tr>
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
            <tr>
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