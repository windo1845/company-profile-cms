<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/home') }}">
                        <img src="{{ asset('images/icons/logo.png') }}" alt="IMG-LOGO" data-logofixed="{{ asset('images/icons/logo2.png') }}">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            @foreach ($pages as $page)
                                <li>
                                    <a href="{{ url($page->slug) }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        </ul>                                                
                    </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">

                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>
