<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guared = ['id'];
    
    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function comments()
    {
    	return $this->morphMany('App\Comment', 'commentable');
    }

}
