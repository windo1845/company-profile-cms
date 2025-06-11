<!-- Sidebar -->
<aside class="sidebar trans-0-4">

    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <a href="{{ url('/home') }}">
            <li class="t-center m-b-30">
                <img src="{{ asset('images/icons/logo.png') }}" alt="IMG-LOGO"
                    data-logofixed="{{ asset('images/icons/logo2.png') }}" style="width: 150px; height: 70px;">
            </li>
        </a>

        @foreach ($pages as $page)
            <li class="t-center m-b-13">
                <a href="{{ url($page->slug) }}" class="txt19">
                    {{ session('lang') === 'en' && $page->title_en ? $page->title_en : $page->title }}
                </a>
            </li>
        @endforeach

        <hr
            style="border: none; height: 4px; width: 190px; background-color: #17b128; 
            margin: 30px auto; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">

        <li class="t-center m-b-13">
            {{ session('lang') === 'en' ? 'FOLLOW US' : 'IKUTI KAMI' }}
        </li>

        <li class="t-center">
            @foreach ($socials as $social)
                <a href="{{ $social->url }}" target="_blank" class="fs-15 c-black m-r-10">
                    <i class="{{ $social->icon_class }}" aria-hidden="true"></i>
                </a>
            @endforeach
        </li>

    </ul>

</aside>
