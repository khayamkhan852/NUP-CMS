<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ auth()->user()->getFirstMediaUrl('users') ?: asset('theme/img/profile_small.jpg') }}"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="{{ route('dashboard.index') }}">
                        <span class="block m-t-xs font-bold">{{ auth()->user()->name }}</span>
                        <span class="text-muted text-xs block">@foreach(auth()->user()->roles as $role)  {{ $role->name }} @endforeach</span>
                    </a>
                </div>
                <div class="logo-element">
                    NUP
                </div>
            </li>
            <li class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('dashboard.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            @canany(['roles_and_permissions.view', 'users.view', 'sections.view', 'disciplines.view', 'colleges.view'])
                <li class="{{ request()->routeIs('settings.*') ? 'active' : '' }}">
                    <a href="#" aria-expanded="true"><i class="fa fa-gears"></i>
                        <span class="nav-label">Settings</span><span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse {{ request()->routeIs('settings.*') ? 'in' : '' }}" aria-expanded="true" style="">
                        @can('disciplines.view')
                            <li class="{{ request()->routeIs('settings.disciplines.*') ? 'active' : '' }}">
                                <a href="{{ route('settings.disciplines.index') }}">Disciplines</a>
                            </li>
                        @endcan
                        @can('colleges.view')
                            <li class="{{ request()->routeIs('settings.colleges.*') ? 'active' : '' }}">
                                <a href="{{ route('settings.colleges.index') }}">Colleges</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcanany
        </ul>
    </div>
</nav>
