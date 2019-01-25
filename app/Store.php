<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $guared = ['id'];
    
    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function foods()
    {
    	return $this->belongsToMany(Food::class);
    }

    public function orders()
    {
    	return $this->hasMany('App\Order', 'store_id');
    }
}
