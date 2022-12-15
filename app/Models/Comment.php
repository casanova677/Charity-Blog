<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

        protected $guarded = [];
    
    
    // returns post of any comment
    public function blog()
    {
        return $this->belongsTo('App\Models\BlogPost', 'on_blog_post');
    }
}