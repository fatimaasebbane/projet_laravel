<base href="/public">
<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">

        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <h4>Admin Asebbane Restaurant</h4>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="{{ $profile->image }}" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ $profile->user->name }}</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>

            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
