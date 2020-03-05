<div class="main-navbar sticky-top bg-white">
    <!-- Main Navbar -->
    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
        <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
            <div class="input-group input-group-seamless ml-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
        </form>
        <ul class="navbar-nav border-left flex-row ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    @if($user->img)
                    <img class="user-avatar rounded-circle mr-2" src={{Storage::url("{$user->img}")}} alt="User Avatar">
                        @else
                        <img class="user-avatar rounded-circle mr-2" src="https://www.driven-u.com/wp-content/members/avatar_none.gif" alt="User Avatar">
                    @endif
                    <span class="d-none d-md-inline-block">{{$user->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="/profile">
                        <i class="material-icons">&#xE7FD;</i> Redaguoti profilį</a>
                    <a class="dropdown-item" href="/myitems">
                        <i class="material-icons">vertical_split</i> Mano prekės</a>
                    <a class="dropdown-item" href="/addnew">
                        <i class="material-icons">note_add</i> Pridėti prekę</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="/logout">
                        <i class="material-icons text-danger">&#xE879;</i> Atsijungti </a>
                </div>
            </li>
        </ul>
        <nav class="nav">
            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="material-icons">&#xE5D2;</i>
            </a>
        </nav>
    </nav>
</div>
