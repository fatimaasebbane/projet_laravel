<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href={{ route('clientIndex.index') }}>
                        <img src={{ asset('clientpage/images/icons/logo.png') }} alt="IMG-LOGO"
                            data-logofixed={{ asset('clientpage/images/icons/logo2.png') }}>
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href={{ route('clientIndex.index') }}>Home</a>
                            </li>

                            <li>
                                <a href={{ route('clientMenu.index') }}>Menu</a>
                            </li>

                            <li>
                                <a href={{ route('clientReservation.index') }}>Reservation</a>
                            </li>

                            <li>
                                <a href={{ route('clientGalery.index') }}>Gallery</a>
                            </li>

                            <li>
                                <a href={{ route('clientAbout.index') }}>About</a>
                            </li>

                            <li>
                                <a href="{{ route('clientBlog.index') }}">Blog</a>
                            </li>

                            <li>
                                <a href="{{ route('clientContact.index') }}">Contact</a>
                            </li>
                            <li>
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('clientprofile.index') }}">
                                                    profile
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>

                            </li>
                            <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                            <li></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
