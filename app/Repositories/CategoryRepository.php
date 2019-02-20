<?php

namespace App\Repositories;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryRepository
{
    public function all()
    {
        return Category::paginate(config('pagination.category'));
    }

    public function findOrFail($id)
    {
        return Category::findOrFail($id);
    }

    public function add(CategoryRequest $request)
    {
        $category = new Category;
        $category->create([
            'name' => $request->get('name'),
            'slug' => changeTitle($request->get('name')),
        ]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $validated = $request->validated();
        $category->update([
            'name' => $request->get('name'),
            'slug' => changeTitle($request->get('name')),
        ]);
    }

    public function delete($id)
    {
        $this->findOrFail($id)->delete();

        return true;
    }
}
