<?php

namespace App\Repositories;

use App\Food;
use App\Promotion;
use App\Category;
use App\Http\Requests\FoodRequest;
use Illuminate\Support\Facades\Input;

class FoodRepository
{
    public function all()
    {
        return Food::paginate(config('pagination.food'));
    }

    public function chooseSale()
    {
        return Promotion::all();
    }

    public function chooseCategory()
    {
        return Category::all();
    }

    public function findOrFail($id)
    {
        return Food::findOrFail($id);
    }

    public function add(FoodRequest $request)
    {
        $food = new Food;
        $validated = $request->validated();
        $food->create([
            'name' => $request->get('name'),          
            'slug' => changeTitle($request->get('name')),
            'description' => $request->get('description'),
            'content' => $request->get('content'), 
            'price' => $request->get('price'), 
            'new' => $request->get('new'), 
            'top' => $request->get('top'),
            'promotion_id' => $request->get('promotion_id'), 
        ]); 
        $data = Input::get('categories');
        $food = Food::orderBy('id', 'desc')->first();
        $food->categories()->attach($data);
    }

    public function update(FoodRequest $request, $id)
    {
        $food = Food::findOrFail($id);
        $validated = $request->validated();
        $food->update([
            'name' => $request->get('name'),          
            'slug' => changeTitle($request->get('name')),
            'description' => $request->get('description'),
            'content' => $request->get('content'), 
            'price' => $request->get('price'), 
            'new' => $request->get('new'), 
            'top' => $request->get('top'),
            'promotion_id' => $request->get('promotion_id'),
        ]);
        $data = Input::get('categories');
        $food = Food::findOrFail($id);
        $food->categories()->sync($data);
    }

    public function delete($id)
    {
        $data = Input::get('categories');
        $food = Food::findOrFail($id);
        $food->categories()->detach($data);
        $this->findOrFail($id)->delete();
        
        return true;
    }
}
