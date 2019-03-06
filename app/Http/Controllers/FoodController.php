<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Promotion;
use App\Category;
use App\Store;
use App\Requests;
use App\Http\Requests\FoodRequest;
use App\Repositories\FoodRepository;

class FoodController extends Controller
{   
    protected $food, $promotion, $category, $store;

    public function __construct(FoodRepository $food, FoodRepository $promotion, FoodRepository $category, FoodRepository $store)
    {
        $this->food = $food;
        $this->promotion = $promotion;
        $this->category = $category;
        $this->store = $store;
    }

    public function getList()
    {
        $food = $this->food->all();
    
    	return view('admin.food.list', compact('food'));
    }

    public function getAdd()
    {   
        $promotion = $this->promotion->chooseSale();
        $category = $this->category->chooseCategory();
        $store = $this->store->chooseStore();

    	return view('admin.food.add', compact('promotion', 'category', 'store'));
    }

    public function postAdd(FoodRequest $request)
    {
        $food = $this->food->add($request);

        return redirect(route('addFood'))->with('message', trans('setting.add_success'));
    }

    public function getEdit($id)
    {
        try 
        {
            $food = $this->food->findOrFail($id);
            $promotion = $this->promotion->chooseSale();
            $category = $this->category->chooseCategory();
            $store = $this->store->chooseStore();

            return view('admin.food.edit', compact('food', 'promotion', 'category', 'store'));
        } 
        catch (ModelNotFoundException $e) 
        {
            echo $e->getMessage();
        }
    }

    public function postEdit(foodRequest $request, $id)
    {   
        try
        {
            $food = $this->food->update($request, $id);

            return redirect('admin/food/edit/' . $id)->with('message', trans('setting.edit_success'));
        }
        catch (ModelNotFoundException $e) 
        {
            echo $e->getMessage();
        }
    }

    public function getDelete($id)
    {
        try 
        {
            $food = $this->food->delete($id);

            return redirect(route('listFood'))->with('message', trans('setting.delete_success'));
        } 
        catch (ModelNotFoundException $e) 
        {
            echo $e->getMessage();
        }
    }
}
