<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                <!-- ADMINISTRACIÓN -->
                <li class="nav-header">ADMINISTRACIÓN</li>

                @can('ver reportes')
                    <li class="nav-item">
                        <a href="{{ url('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endcan

                @can('ver usuarios')
                    <li class="nav-item">
                        <a href="{{ url('admin/users') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                @endcan

                @can('gestionar congregación')
                    <li class="nav-item">
                        <a href="{{ url('admin/congregacion') }}" class="nav-link">
                            <i class="nav-icon fas fa-church"></i>
                            <p>Gestión de Congregación</p>
                        </a>
                    </li>
                @endcan

                @can('gestionar eventos')
                    <li class="nav-item">
                        <a href="{{ url('admin/eventos') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Eventos</p>
                        </a>
                    </li>
                @endcan

                @can('ver reportes')
                    <li class="nav-item">
                        <a href="{{ url('admin/reportes') }}" class="nav-link">
                            <i class="nav-icon fas fa-chart-bar"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                @endcan

                <!-- AJUSTES -->
                <li class="nav-header">AJUSTES</li>

                @can('editar usuarios')
                    <li class="nav-item">
                        <a href="{{ url('admin/settings') }}" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Configuración</p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item">
                    <a href="{{ url('admin/profile') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/settings') }}" class="nav-link">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>Cambiar Contraseña</p>
                    </a>
                </li>

                <!-- OTRAS OPCIONES -->
                <li class="nav-header">OTRAS OPCIONES</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-share"></i>
                        <p>
                            Niveles de Menú
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>Nivel 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>Nivel 1</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Nivel 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Nivel 2</p>
                                        <i class="right fas fa-angle-left"></i>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <p>Nivel 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- ETIQUETAS -->
                <li class="nav-header">ETIQUETAS</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle text-danger"></i>
                        <p>Importante</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle text-warning"></i>
                        <p>Advertencia</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle text-info"></i>
                        <p>Información</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>