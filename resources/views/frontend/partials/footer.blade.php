{{-- garis melintang --}}
<hr
    style="border: none; height: 4px; width: 300px; background-color: #17b128; 
margin: 30px auto; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">

<!-- Footer -->
<footer class="bg1">
    <div class="container p-t-40 p-b-70">
        <div class="row">
            <!-- About Us -->
            <div class="col-sm-6 col-md-4 p-t-50">
                <h4 class="txt13 m-b-33">
                    {{ session('lang') === 'en' ? 'About Us' : 'Tentang Kami' }}
                </h4>
                <ul class="list-inline">
                    {!! nl2br(
                        e(session('lang') === 'en' && $aboutFooter->content_en ? $aboutFooter->content_en : $aboutFooter->content),
                    ) !!}
                </ul>
            </div>

            <!-- Contact Us + Follow Us digabung -->
            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- Contact Us -->
                <h4 class="txt13 m-b-33">
                    {{ session('lang') === 'en' ? 'Contact Us' : 'Kontak Kami' }}
                </h4>
                <ul class="list-inline">
                    @if ($footer->description)
                        <li class="txt14 m-b-14">
                            <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            {{ $footer->address }}
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            {{ $footer->phone }}
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                            {{ $footer->email }}
                        </li>
                    @else
                        <li class="txt14 m-b-14"></li>
                    @endif
                </ul>
                <br>

                <!-- Follow Us -->
                <h4 class="txt13 m-b-20">
                    {{ session('lang') === 'en' ? 'Follow Us' : 'Ikuti Kami' }}
                </h4>
                <ul class="list-inline">
                    @foreach ($socials as $social)
                        <a href="{{ $social->url }}" target="_blank" class="fs-15 c-black m-r-10">
                            <i class="{{ $social->icon_class }}" aria-hidden="true"> </i>
                        </a>
                    @endforeach
                </ul>
            </div>

            <!-- Pages -->
            <div class="footer-pages col-sm-6 col-md-4 p-t-50">
                <h4 class="txt13 m-b-33">
                    {{ session('lang') === 'en' ? 'Pages' : 'Halaman' }}
                </h4>
                <ul class="list-inline">
                    @foreach ($pages as $page)
                        <li>
                            <a href="{{ url($page->slug) }}">
                                {{ session('lang') === 'en' && $page->title_en ? $page->title_en : $page->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="end-footer bg2">
        <div class="container">
            <div class="d-flex justify-content-center p-t-22 p-b-22">
                <div class="txt17 p-r-20 p-t-5 p-b-5">
                    Copyright &copy; 2025. All rights reserved
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>

<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
