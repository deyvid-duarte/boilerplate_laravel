<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="pathToLogo" alt="Logo" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="pathToLogo" alt="Logo" height="17" />
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="pathToLogo" alt="Logo" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="pathToLogo" alt="Logo" height="18" />
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn" onClick={openCloseMenu}>
                <i class="mdi mdi-menu"></i>
            </button>
        
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="/account">
                        <i class="mdi mdi-account-circle font-size-17 text-muted align-middle mr-1"></i> Perfil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="/logout">
                        <i class="mdi mdi-power font-size-17 text-muted align-middle mr-1 text-danger"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>