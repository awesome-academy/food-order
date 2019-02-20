<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{  
    protected $guared = ['id'];

    protected $fillable = [
        'name', 
        'slug',
    ];

    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function foods()
    {
    	return $this->belongsToMany(Food::class);
    }
}
