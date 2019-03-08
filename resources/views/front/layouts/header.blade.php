<header class="header header_three">
<div class="header_top_bar top_bar_three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header_top_inner">
                    <div class="phone">
                        <p><i class="ion-clock"></i>{{ trans('setting.header_left') }}</p>
                    </div>
                    <div class="header_top_right">
                        <ul class="header_top_right_inner">
                            <li class="language_wrapper_two">
                                <a href="#">
                                    <span>{{ trans('setting.user') }}<i class="fa fa-angle-down"></i> </span>
                                </a>
                                <ul class="account__name">
                                    <li><a href="my-account.html">{{ trans('setting.user') }}</a></li>
                                    <li><a href="checkout.html">{{ trans('setting.register') }}</a></li>
                                    <li><a href="login.html">{{ trans('setting.login') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header_middle middel_three">		
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header_middle_wrapper">
                    <div class="header_middle_inner">
                        <div class="search_box search_three">
                            <div class="search_inner"></div>                      
                        </div>
                        <div class="logo logo_three">
                            <a href="index.html">
                                <img src="{{ asset(config('setting.front_image.logo')) }}/logo.png">
                            </a>
                        </div>
                        <div class="mini__cart cart_three">
                            <div class="mini_cart_inner">
                                <div class="cart_icon">
                                    <a href="#">
                                        <span class="cart_icon_inner">
                                            <i class="ion-android-cart"></i>
                                            <span class="cart_count"></span>
                                        </span>
                                        <span class="item_total"></span>
                                    </a>
                                </div>
                                <div class="mini_cart_box cart_box_three">
                                    <div class="mini_cart_item">
                                        <div class="mini_cart_img">
                                            <a href="#">
                                                <img src="#" alt="">
                                                <span class="cart_count"></span>
                                            </a>
                                        </div>
                                        <div class="cart_info cart_info_two">
                                            <h5><a href="product-details.html"></a></h5>
                                            <span class="cart_price"></span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_item">
                                        <div class="mini_cart_img">
                                            <a href="#">
                                                <img src="#" alt="">
                                                <span class="cart_count"></span>
                                            </a>
                                        </div>
                                        <div class="cart_info cart_info_two">
                                            <h5><a href="#"></a></h5>
                                            <span class="cart_price"></span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>                                  
                                    <div class="price_content">
                                        <div class="cart_subtotals cart_subtotals_two">
                                            <div class="price_inline tow">
                                                <span class="label"></span>
                                                <span class="value"></span>
                                            </div>
                                            <div class="price_inline price_inline_tow">
                                                <span class="label"></span>
                                                <span class="value"></span>
                                            </div>
                                            <div class="price_inline price_inline_tow">
                                                <span class="label"></span>
                                                <span class="value"></span>
                                            </div>
                                        </div>
                                        <div class="cart-total-price cart-total-price_two">
                                            <span class="label"></span>
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                    <div class="min_cart_checkout checkoyt_two">
                                        <a href="checkout.html">{{ trans('setting.checkout') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>
<div class="header_bottm bottom_three sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="main_menu_inner  inner__three">
                    <div class="menu menu_three">
                        <nav>
                            <ul class="menu_three_inner">
                                <li><a href="about.html">{{ trans('setting.home') }}</a></li>
                                <li><a href="about.html">{{ trans('setting.about') }}</a></li>
                                <li><a href="shop.html">{{ trans('setting.shop') }}</a></li>
                                <li><a href="blog.html">{{ trans('setting.news') }}</a>
                                </li>
                                <li class="mega_parent"><a href="#">{{ trans('setting.category') }} <i class="fa fa-angle-down"></i></a>                                                                                                          
                                    <ul class="mega_menu">
                                        @foreach ($category as $ca)
                                        <li class="mega_item">                                          
                                            <ul>
                                                <li><a href="shop.html">{{ $ca->name }}</a></li>
                                            </ul> 
                                        </li> 
                                        @endforeach  
                                    </ul>                                     
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</header>	
