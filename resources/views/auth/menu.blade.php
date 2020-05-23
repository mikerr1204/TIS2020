<nav class="nav nav-pills flex-column accordion">
    @can('roles.index')
        <a class="nav-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
            <strong>
                <span class="text-left">
                    <i class="fas fa-address-card "></i> Roles
                </span>
            </strong>
        </a>
        <nav class="nav nav-pills flex-column collapse" id="collapseOne1">
            @can('roles.create')
                <a class="nav-link ml-3 my-1 unique-color" href="{{ route('roles.create') }}">
                    <span class="text-left">
                        <i class="fas fa-pen-alt "></i> Crear
                    </span>
                </a>
            @endcan
            @can('roles.index')
                <a class="nav-link ml-3 my-1 unique-color" href="{{ route('roles.index') }}">
                    <span class="text-left">
                        <i class="fas fa-list-alt"></i> Listar
                    </span>
                </a>
            @endcan
        </nav>
    @endcan

    @can('users.index')
        <a class="nav-link" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
            <strong>
                <span class="text-left">
                    <i class=" fas fa-user"></i> Usuarios
                </span>
            </strong>
        </a>
        <nav class="nav nav-pills flex-column collapse" id="collapseOne2">
            @can('users.create')
                <a class="nav-link ml-3 my-1 unique-color" href="{{ route('users.create') }}">
                    <span class="text-left">
                        <i class="fas fa-pen-alt "></i> Crear
                    </span>
                </a>
            @endcan
            @can('users.index')
                <a class="nav-link ml-3 my-1 unique-color" href="{{ route('users.index') }}">
                    <span class="text-left">
                        <i class="fas fa-list-alt"></i> Listar
                    </span>
                </a>
            @endcan
        </nav>
    @endcan

    @can('users.index')
        <a class="nav-link" data-toggle="collapse" data-target="#collapseConvoc" aria-expanded="true" aria-controls="collapseConvoc">
            <strong>
                <span class="text-left">
                    <i class=" fas fa-user"></i> Convocatoria
                </span>
            </strong>
        </a>
        <nav class="nav nav-pills flex-column collapse" id="collapseConvoc">
            @can('users.create')
                <a class="nav-link ml-3 my-1 unique-color" href="{{ route('convocatorias.create') }}">
                    <span class="text-left">
                        <i class="fas fa-pen-alt "></i> Crear
                    </span>
                </a>
            @endcan
            @can('users.index')
                <a class="nav-link ml-3 my-1 unique-color" href="{{ route('convocatorias.index') }}">
                    <span class="text-left">
                        <i class="fas fa-list-alt"></i> Listar
                    </span>
                </a>
            @endcan
        </nav>
    @endcan

    @can('postulantes.index')
        <a class="nav-link" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true" aria-controls="collapsePost">
            <strong>
                <span class="text-left">
                    <i class=" fas fa-user"></i> Postulante
                </span>
            </strong>
        </a>
        <nav class="nav nav-pills flex-column collapse" id="collapsePost">
            <a class="nav-link ml-3 my-1 unique-color" href="">
                <span class="text-left">
                     Mis Notas
                </span>
            </a>
            <a class="nav-link ml-3 my-1 unique-color" href="{{ route('postulations.index') }}">
                <span class="text-left">
                     Mis Postulaciones
                </span>
            </a>
        </nav>
    @endcan
</nav>