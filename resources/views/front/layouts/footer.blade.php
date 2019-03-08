<footer class="footer footer_three pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="single_footer widget">
                    <div class="single_footer_widget_inner">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ asset(config('setting.front_image.logo')) }}/logo_footer.png" alt=""></a>
                        </div>
                        <div class="footer_content">
                            <p>{{ trans('setting.address') }}</p>
                            <p>{{ trans('setting.phone_number') }}</p>
                            <p>{{ trans('setting.email') }}</p>
                        </div>
                        <div class="footer_social">
                            <h4>{{ trans('setting.follow') }}</h4>
                            <div class="footer_social_icon">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="footer_menu_list d-flex justify-content-between">
                    <div class="single_footer widget">
                        <div class="single_footer_widget_inner">   
                            <div class="footer_title">
                                <h2>{{ trans('setting.category') }}</h2>
                            </div>
                            @foreach ($category as $ca)
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">{{ $ca->name }}</a></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>  
                    <div class="single_footer widget">
                        <div class="single_footer_widget_inner">   
                            <div class="footer_title">
                                <h2>{{ trans('setting.shop') }}</h2>
                            </div>
                            @foreach ($store as $st)
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">{{ $st->name }}</a></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>  
                    <div class="single_footer widget">
                        <div class="single_footer_widget_inner">   
                            <div class="footer_title">
                                <h2>{{ trans('setting.user') }}</h2>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">{{ trans('setting.login') }}</a></li>
                                    <li><a href="#">{{ trans('setting.logout') }}</a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_text">
                        <p>{{ trans('setting.footer_left') }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_mastercard text-right">
                        <a href="#"><img src="{{ asset(config('setting.front_image.brand')) }}/payment.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('bower_components/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/popper.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/ajax-mail.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/plugins.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/main.js') }}"></script>
<script src="{{ asset('bower_components/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
@yield('script')
