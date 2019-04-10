<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Food;
use App\Promotion;

class FoodTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function showFood()
    {   
        $promotion = factory(Promotion::class)->create();
        $food = factory(Food::class)->create([
            'promotion_id' => $promotion->id,
        ]); 
        $found = Food::findOrFail($food->id);
        $this->assertInstanceOf(Food::class, $food);
        $this->assertEquals($found->name, $food->name);
        $this->assertEquals($found->slug, $food->slug);
        $this->assertEquals($found->description, $food->description);
        $this->assertEquals($found->content, $food->content);
        $this->assertEquals($found->price, $food->price);
        $this->assertEquals($found->top, $food->top);
        $this->assertEquals($found->new, $food->new);
        $this->assertEquals($found->promotion_id, $food->promotion_id);
    }

    /** @test */
    public function createFood()
    {
        $promotion = factory(Promotion::class)->create();
        $food = factory(Food::class)->create([
            'promotion_id' => $promotion->id,
        ]);   
        $this->assertInstanceOf(Food::class, $food);
        $this->assertDatabaseHas('foods', [
            'name' => $food->name,
            'slug' => $food->slug,
            'description' => $food->description,
            'content' => $food->content,
            'price' => $food->price,
            'top' => $food->top,
            'new' => $food->new,
            'promotion_id' => $food->promotion_id,
        ]);
    }

    /** @test */
    public function updateFood()
    {
        $promotion = factory(Promotion::class)->create();
        $food = factory(Food::class)->create([
            'promotion_id' => $promotion->id,
        ]); 
        $data = [
            'name' => 'abc',
            'slug' => 'a-b-c',
            'description' => 'abcdxyz',
            'content' => 'abcdxyz',
            'price' => '10000',
        ];
        $foodUpdate = Food::findOrFail($food->id);
        $update = $foodUpdate->update($data);
        $this->assertTrue($update);
        $this->assertEquals($data['name'], $foodUpdate->name);
        $this->assertEquals($data['slug'], $foodUpdate->slug);
        $this->assertEquals($data['description'], $foodUpdate->description);
        $this->assertEquals($data['content'], $foodUpdate->content);
        $this->assertEquals($data['price'], $foodUpdate->price);
    }

    /** @test */
    public function deleteFood()
    {
        $food = factory(Food::class)->create();
        $delete = $food->delete();
        $this->assertTrue($delete);
        $this->assertDatabaseMissing('foods', [
            'name' => $food->name,
        ]);        
    }
}
