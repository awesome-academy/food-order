@extends('front.layouts.master')
@section('content')
<div class="slider_area slider_area_three">
    <div class="slider_list  owl-carousel">
        @foreach($banner1 as $bn1)
        <div class="single_slide single_slide_three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider__content slider_content_three">                       
                            <img src="{{ asset(config('setting.avatar.banner')) }}/{{ $bn1->image }}">                       
                            <div class="slider_btn">
                                <a href="shop.html">{{ trans('setting.homepage.shopping') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="organic_food_wrapper home3">	
    <div class="shipping_area shipping_three ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shipping_list d-flex justify-content-between">
                        <div class="single_shipping_box d-flex">
                            <div class="shipping_icon">
                                <img src="{{ asset(config('setting.front_image.ship')) }}/1.png" alt="shipping icon">
                            </div>
                            <div class="shipping_content">
                                <h6>{{ trans('setting.homepage.ship1') }}</h6>
                                <p>{{ trans('setting.homepage.ship2') }}</p>
                            </div>
                        </div>
                        <div class="single_shipping_box one d-flex">
                            <div class="shipping_icon">
                                <img src="{{ asset(config('setting.front_image.ship')) }}/2.png" alt="shipping icon">
                            </div>
                            <div class="shipping_content">
                                <h6>{{ trans('setting.homepage.money_return1') }}</h6>
                                <p>{{ trans('setting.homepage.money_return2') }}</p>
                            </div>
                        </div>
                        <div class="single_shipping_box d-flex">
                            <div class="shipping_icon">
                                <img src="{{ asset(config('setting.front_image.ship')) }}/4.png" alt="shipping icon">
                            </div>
                            <div class="shipping_content">
                                <h6>{{ trans('setting.homepage.support') }}</h6>
                                <p>{{ trans('setting.homepage.ship2') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="features_product home_3 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title text-center">
                    <h3>{{ trans('setting.homepage.sale_food') }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features_product_three_active owl-carousel">
                @foreach ($foodSale as $fos)                            
                <div class="col-lg-2">
                    <div class="single__product">
                        <div class="single_product__inner">
                            @if ($fos->new == 1)
                                <span class="new_badge">{{ trans('setting.new') }}</span>
                            @endif
                            <span class="discount_price">-{{ $fos->promotion->discount }}%</span>
                            <div class="product_img">
                            <a href="#">
                                <img src="{{ asset(config('setting.avatar.food')) }}/{{ $fos->image }}" alt="">
                            </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="produc_desc_info">
                                    <div class="product_title">
                                        <h4><a href="product-details.html">{{ $fos->name }}</a></h4>
                                    </div>
                                    <div class="product_price">
                                        <p class="regular_price">{{ ($fos->price) - (($fos->price * $fos->promotion->discount) / 100) }}</p>
                                        <p class="old_price">{{ $fos->price }}</p>
                                    </div>
                                </div>
                                <div class="product__hover">
                                    <ul>
                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal" title="Quick View" ><i class="ion-android-open"></i></a></li>
                                        <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="new_product new_product_three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title space_2 text-left">
                    <h3>{{ trans('setting.homepage.new_food') }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features_product_active_three owl-carousel">
                @foreach ($foodNew as $fon)
                <div class="col-lg-2">
                    <div class="single__product">
                        <div class="single_product__inner">
                            <span class="new_badge">{{ trans('setting.new') }}</span>
                            @if ($fon->promotion_id != null)
                                <span class="discount_price">-{{ $fon->promotion->discount }}%</span>
                            @endif
                            <div class="product_img">
                            <a href="#">
                                <img src="{{ asset(config('setting.avatar.food')) }}/{{ $fon->image }}" alt="">
                            </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="produc_desc_info">
                                    <div class="product_title">
                                        <h4><a href="product-details.html">{{ $fon->name }}</a></h4>
                                    </div>
                                    @if ($fon->promotion_id != null)
                                        <div class="product_price">
                                            <p class="regular_price">{{ ($fos->price) - (($fos->price * $fos->promotion->discount) / 100) }}</p>
                                            <p class="old_price">{{ $fos->price }}</p>
                                        </div>
                                    @else
                                        <div class="product_price">
                                            <p>{{ $fon->price }}</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="product__hover">
                                    <ul>
                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal" title="Quick View" ><i class="ion-android-open"></i></a></li>
                                        <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="banner_area">
    <div class="container">
        <div class="row">
            @foreach ($banner2 as $bn2)
            <div class="col-lg-6">
                <div class="single_banner">
                    <a href="#">
                        <img src="{{ asset(config('setting.avatar.banner')) }}/{{ $bn2->image }}">  
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="new_product new_product_three three_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title space_2 text-left">
                    <h3>{{ trans('setting.homepage.top_food') }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features_product_active_three owl-carousel">
                @foreach ($foodTop as $fot)
                <div class="col-lg-2">
                    <div class="single__product">
                        <div class="single_product__inner">
                            @if ($fot->new == 1)
                                <span class="new_badge">new</span>
                            @endif
                            @if ($fot->promotion_id != null)
                                <span class="discount_price">-{{ $fot->promotion->discount }}%</span>
                            @endif
                            <div class="product_img">
                            <a href="#">
                                <img src="{{ asset(config('setting.avatar.food')) }}/{{ $fot->image }}" alt="">
                            </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="produc_desc_info">
                                    <div class="product_title">
                                        <h4><a href="product-details.html">{{ $fot->name }}</a></h4>
                                    </div>
                                    <div class="product_price">
                                        <p>{{ $fot->price }}</p>
                                    </div>
                                </div>
                                <div class="product__hover">
                                    <ul>
                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal" title="Quick View" ><i class="ion-android-open"></i></a></li>
                                        <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="best_seller_product two best_seller_three">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8">
                <div class="section_title space_2 text-left">
                    <h3>{{ trans('setting.homepage.category1') }}</h3>
                </div>            
                <div class="best_selling_product_three owl-carousel">
                    @foreach($category as $ca)
                        @foreach ($ca->foods as $fo)
                            @if ($fo->pivot->category_id == 6)  
                                <div class="best_selling_product">                          
                                    <div class="single_small_product small_three">
                                        <div class="product_thumb">
                                            <a href="#">
                                                <img src="{{ asset(config('setting.avatar.food')) }}/{{ $fo->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="product-details.html"></a>{{ $fo->name }}</h4>
                                            <div class="product_ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_price">
                                                <span class="regular_price">{{ $fo->price }}</span>
                                                <span class="old_price"></span>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>                
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="section_title space_2 text-left">
                    <h3>{{ trans('setting.homepage.category2') }}</h3>
                </div>            
                <div class="best_selling_product_three owl-carousel">
                    @foreach($category as $ca)
                        @foreach ($ca->foods as $fo)
                            @if ($fo->pivot->category_id == 7)  
                                <div class="best_selling_product">                          
                                    <div class="single_small_product small_three">
                                        <div class="product_thumb">
                                            <a href="#">
                                                <img src="{{ asset(config('setting.avatar.food')) }}/{{ $fo->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="product-details.html"></a>{{ $fo->name }}</h4>
                                            <div class="product_ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_price">
                                                <span class="regular_price">{{ $fo->price }}</span>
                                                <span class="old_price"></span>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>                
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="section_title space_2 text-left">
                    <h3>{{ trans('setting.homepage.category3') }}</h3>
                </div>            
                <div class="best_selling_product_three owl-carousel">
                    @foreach($category as $ca)
                        @foreach ($ca->foods as $fo)
                            @if ($fo->pivot->category_id == 8)  
                                <div class="best_selling_product">                          
                                    <div class="single_small_product small_three">
                                        <div class="product_thumb">
                                            <a href="#">
                                                <img src="{{ asset(config('setting.avatar.food')) }}/{{ $fo->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="product-details.html"></a>{{ $fo->name }}</h4>
                                            <div class="product_ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_price">
                                                <span class="regular_price">{{ $fo->price }}</span>
                                                <span class="old_price"></span>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
