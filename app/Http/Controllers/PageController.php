<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Store;
use App\Banner;
use App\Food;
use App\Repositories\PageRepository;

class PageController extends Controller
{   
    protected $foodSale, $foodNew, $foodTop, $banner1, $banner2;

    public function __construct(PageRepository $foodSale, PageRepository $banner1, PageRepository $banner2, PageRepository $foodNew, PageRepository $foodTop)
    {   
        $this->banner1 = $banner1;
        $this->banner2 = $banner2;
        $this->foodSale = $foodSale;        
        $this->foodNew = $foodNew;
        $this->foodTop = $foodTop;
    }

    public function getHome()
    {
        $banner1 = $this->banner1->banner1();
        $banner2 = $this->banner2->banner2();
        $foodSale = $this->foodSale->saleFood();
        $foodNew = $this->foodNew->newFood();
        $foodTop = $this->foodTop->topFood();
      
        return view('front.pages.home', compact('banner1', 'banner2', 'foodSale', 'foodNew', 'foodTop'));
    }
}
