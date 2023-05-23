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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    </svg>
                    <i class="bi bi-people-fill"></i>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-rolodex" viewBox="0 0 16 16">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                        <path
                            d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
                    </svg>
                    <i class="bi bi-person-rolodex"></i>
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
            <a class="nav-link" href="commande">
                <span class="menu-icon">

                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">commandes</span>
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
