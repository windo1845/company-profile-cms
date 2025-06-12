<!DOCTYPE html>
<html lang="en">

<head>
    <title>DailyMeal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/lightbox2/css/lightbox.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    /* untuk button bahasa */
    .lang-btn {
        background: transparent;
        border: none;
        color: white;
        cursor: pointer;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transition: background-color 0.3s, color 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin: 0 5px;
        font-size: 14px;
    }

    .wrap-menu-header.scrolled .lang-btn {
        color: black;
    }

    .lang-btn.active-lang {
        background-color: #4fb85c;
        color: white;
        text-decoration: none;
    }


    /* Default: tombol disembunyikan */
    #prev-btn,
    #next-btn {
        display: none !important;
    }

    /* Tampilkan tombol jika layar cukup besar (tablet/desktop) */
    @media (min-width: 768px) {

        #prev-btn,
        #next-btn {
            display: block !important;
        }
    }
</style>


<body class="animsition">

    @include('frontend.partials.header')

    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80" id="hero-slider"
        style="position: relative; transition: background-image 0.5s ease;">
        <div class="container p-l-15 p-r-15">
            <h2 class="tit6 t-center"></h2>

            <button id="prev-btn"
                style=" position: absolute;  left: 30px;  top: 30%;
                    transform: translateY(50%); background: rgba(0,0,0,0.5);  color: white; 
                    border: none;  padding: 10px 10px; font-size: 30px; border-radius: 5px; cursor: pointer;">&#10094;
            </button>

            <button id="next-btn"
                style="position: absolute; right: 30px; top: 30%; 
                    transform: translateY(50%); background: rgba(0,0,0,0.5);  color: white; 
                    border: none; padding: 10px 10px; font-size: 30px; border-radius: 5px; cursor: pointer;">&#10095;
            </button>

        </div>
    </section>

    {{-- Sidebar --}}
    <div class="main-container d-flex">
        @include('frontend.partials.sidebar')

        <main style="flex: 1;">
            @yield('content')
        </main>
    </div>

    @include('frontend.partials.footer')

    {{-- JS --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- untuk button bahasa --}}
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.wrap-menu-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
    <script>
        const images = @json($aboutImages->pluck('image_url'));
        let currentIndex = 0;

        const section = document.getElementById('hero-slider');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');

        function updateBackground() {
            if (images.length > 0) {
                section.style.backgroundImage = `url('${images[currentIndex]}')`;
            } else {
                section.style.backgroundImage = `url('{{ asset('images/default-hero.jpg') }}')`;
            }
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            updateBackground();
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateBackground();
        }

        nextBtn.addEventListener('click', showNextImage);
        prevBtn.addEventListener('click', showPrevImage);

        updateBackground(); // panggil saat halaman pertama kali dibuka
        setInterval(showNextImage, 5000);
    </script>

</body>

</html>
