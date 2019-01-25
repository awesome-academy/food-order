<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{   
    protected $guared = ['id'];
    
    protected $date = [
        'created_at',
        'updated_at',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->hasMany('App\foodImage', 'food_id');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\orderDetail', 'food_id');
    }

    public function promotion()
    {
        return $this->belongsTo('App\Promotion', 'promotion_id');
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
