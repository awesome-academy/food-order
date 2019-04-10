<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function showCategory()
    {
        $category = factory(Category::class)->create();
        $found = Category::findOrFail($category->id);
        $this->assertInstanceOf(Category::class, $category);
        $this->assertEquals($found->name, $category->name);
        $this->assertEquals($found->slug, $category->slug);
    }

    /** @test */
    public function createCategory()
    {
        $category = factory(Category::class)->create();    
        $this->assertInstanceOf(Category::class, $category);
        $this->assertDatabaseHas('categories', [
            'name' => $category->name,
            'slug' => $category->slug,
        ]);
    }

    /** @test */
    public function updateCategory()
    {
        $category = factory(Category::class)->create(); 
        $data = [
            'name' => 'abc',
            'slug' => 'a-b-c',
        ];
        $categoryUpdate = Category::findOrFail($category->id);
        $update = $categoryUpdate->update($data);
        $this->assertTrue($update);
        $this->assertEquals($data['name'], $categoryUpdate->name);
        $this->assertEquals($data['slug'], $categoryUpdate->slug);
    }

    /** @test */
    public function deleteCategory()
    {
        $category = factory(Category::class)->create();
        $delete = $category->delete();
        $this->assertTrue($delete);
        $this->assertDatabaseMissing('categories', [
            'name' => $category->name,
        ]);        
    }
}
