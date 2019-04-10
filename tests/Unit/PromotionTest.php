<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Promotion;

class PromotionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function showPromotion()
    {
        $promotion = factory(Promotion::class)->create();
        $found = Promotion::findOrFail($promotion->id);
        $this->assertInstanceOf(Promotion::class, $promotion);
        $this->assertEquals($found->discount, $promotion->discount);
    }

    /** @test */
    public function createPromotion()
    {
        $promotion = factory(Promotion::class)->create();    
        $this->assertInstanceOf(Promotion::class, $promotion);
        $this->assertDatabaseHas('promotions', [
            'discount' => $promotion->discount,
            'start_date' => $promotion->start_date,
            'end_date' => $promotion->end_date,
        ]);
    }

    /** @test */
    public function updatePromotion()
    {
        $promotion = factory(Promotion::class)->create(); 
        $data = [
            'discount' => '50',
        ];
        $promotionUpdate = Promotion::findOrFail($promotion->id);
        $update = $promotionUpdate->update($data);
        $this->assertTrue($update);
        $this->assertEquals($data['discount'], $promotionUpdate->discount);
    }

    /** @test */
    public function deletePromotion()
    {
        $promotion = factory(Promotion::class)->create();
        $delete = $promotion->delete();     
        $this->assertTrue($delete);
    }
}
