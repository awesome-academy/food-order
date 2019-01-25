<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{  
    protected $guared = ['id'];
    
    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function commentable()
    {
    	return $this->morphTo();
    }
}
