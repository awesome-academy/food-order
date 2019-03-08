<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Store;

class PageController extends Controller
{   
    public function getHome()
    {
        return view('front.pages.home');
    }
}
