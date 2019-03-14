<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Store;
use App\Banner;
use App\Food;
use App\Repositories\PageRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class PageController extends Controller
{   
    protected $foodSale, $foodNew, $foodTop, $banner1, $banner2, $banner3, $banner4;

    public function __construct(PageRepository $foodSale, PageRepository $banner1, PageRepository $banner2,  PageRepository $banner3, PageRepository $banner4, PageRepository $foodNew, PageRepository $foodTop)
    {   
        $this->banner1 = $banner1;
        $this->banner2 = $banner2;
        $this->banner3 = $banner3;
        $this->banner4 = $banner4;
        $this->foodSale = $foodSale;        
        $this->foodNew = $foodNew;
        $this->foodTop = $foodTop;
    }

    public function getHome()
    {
        $banner1 = $this->banner1->banner1();
        $banner2 = $this->banner2->banner2();
        $banner3 = $this->banner3->banner3();
        $banner4 = $this->banner4->banner4();
        $foodSale = $this->foodSale->saleFood();
        $foodNew = $this->foodNew->newFood();
        $foodTop = $this->foodTop->topFood();
      
        return view('front.pages.home', compact('banner1', 'banner2', 'banner3', 'banner4', 'foodSale', 'foodNew', 'foodTop'));
    }

    public function getLogin()
    {
        return view('front.pages.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $validated = $request->validated();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {   
            $user = Auth::user();
            if ($user->level == 0)
            {
                return redirect(route('listFood'));
            } else {
                return redirect(route('home'));
            }
    		return redirect(route('home'));
        } else {        
    		return redirect(route('login'))->with('message', trans('setting.loginpage.fail'));
    	}
    }

    public function getLogout()
    {
        Auth::logout();

    	return redirect(route('home'));
    }

    public function getSignup()
    {
        return view('front.pages.register');
    }

    public function postSignup(RegisterRequest $request)
    {
        $user = $this->user->addUser($request);

        return redirect('signup')->with('message', trans('setting.registerpage.success'));
    }
}

