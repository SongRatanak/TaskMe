<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-envelope me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">{{ Auth::user()->currentTeam->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Team Setting</h6>
                        </div>
                        @endcan
                    </div>
                </a>
                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <a href="{{ route('teams.create') }}" class="dropdown-item">
                    <div class="d-flex align-items-center">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Create Team</h6>
                            </div>
                    </div>
                </a>
                @endcan
            </div>
        </div>
        @endif
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <span class="d-none d-lg-inline-flex">John Doe</span>
            </a>

            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="{{route('profile.show')}}" class="dropdown-item">My Profile</a>

                <!-- Authentication -->
                <form action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button  class="dropdown-item" type="submit">
                        {{ __('Logout') }}
                    </button>
                </form>

            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
