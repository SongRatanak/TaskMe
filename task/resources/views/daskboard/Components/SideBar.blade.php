<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('Home')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-home me-2"></i>OneTask</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="" style="width: 50px; height: 50px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                <span>{{Auth::user()->role}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('Home')}}" class="nav-item nav-link {{ (request()->is('home')) ? 'active' : '' }}">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle
                {{ (request()->is('Homelist*'  )) || request()->is('PersonalList*') || request()->is('ImportantList*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-list me-2"></i>Todo List</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Homelist.index' )}}" class="dropdown-item {{ (request()->is('Homelist*')) ? 'active' : '' }}">Home</a>
                    <a href="{{route('PersonalList.index')}}" class="dropdown-item {{ (request()->is('PersonalList*')) ? 'active' : '' }}">Personal</a>
                    <a href="{{route('ImportantList.index')}}" class="dropdown-item {{ (request()->is('ImportantList*')) ? 'active' : '' }}">Important</a>
                </div>
            </div>


            <a href="{{route('TakeNote.index')}}" class="nav-item nav-link  {{ (request()->is('TakeNote*')) ? 'active' : '' }} "><i class="fa fa-book me-2"></i> Take Note</a>
        </div>


    </nav>

</div>
<!-- Sidebar End -->
