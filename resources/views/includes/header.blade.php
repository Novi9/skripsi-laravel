<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">

                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-15">
                                <nav class="menu main menu container">
                                    <ul id="menu-main-menu-1" class="menu">
                                        <button type="button" class="btn btn-flat-primary ml-2 mb-1">Home</button>
                                    <button type="button" class="btn btn-flat-primary ml-2 mb-1">AHP-TOPSIS</button>
                                    <button type="button" class="btn btn-flat-primary ml-2 mb-1">Tentang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ auth()->user()->nama ?? " Hello, Admin" }}</span><span class="user-status">{{ ucfirst(auth()->user()->jabatan ?? "Admin") }}</span></div><span><img class="round" src="{{ url('app-assets/images/avatar/avatar.png')}}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('auth-logout') }}"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
