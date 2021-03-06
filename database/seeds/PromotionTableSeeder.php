<?php

use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Promotion::class, 20)->create()->each(function($promotion)
        {
        	$promotion->foods()->saveMany(factory(App\Food::class, rand(1, 4))->create([
                'promotion_id' => $promotion->id
                ])
            );
        });
    }
}
