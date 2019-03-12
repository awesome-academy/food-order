<?php

namespace App\Repositories;

use App\Category;
use App\Store;
use App\Food;
use App\Banner;

class PageRepository
{   
    public function banner1()
    {
        return Banner::where('link', 'top')->get();
    }

    public function banner2()
    {
        return Banner::where('link', 'mid')->get();
    }

    public function saleFood()
    {
        return Food::whereNotNull('promotion_id')->take(config('setting.take'))->get();
    }

    public function newFood()
    {
        return Food::where('new', 1)->take(config('setting.take'))->get();
    }

    public function topFood()
    {
        return Food::where('top', 1)->take(config('setting.take'))->get();
    }
}
