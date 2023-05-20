<base href="/public">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="clientIndex" style="color: white">Acceuil </a>

    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{ $profile->image }}" alt="{{ $profile->image }}">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ $profile->user->name }}</h5>
                        <span>Admin Member</span>
                    </div>
                </div>

            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="user" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">users</span>
                <i class="menu-arrow"></i>
            </a>

        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="repas">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Menu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="contact">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">contacts</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="chef">
                <span class="menu-icon">

                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">chefs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="blog">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">blogs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="reservation">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Reservation</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="category">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="photos">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Galery</span>
            </a>
        </li>
    </ul>
</nav>
