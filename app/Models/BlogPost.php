<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;

    protected $guarded = [];

      public function comments()
    {
      return $this->hasMany('App\Models\Comment', 'on_blog_post');
    }

    public function author()
    {
      return $this->belongsTo('App\Models\User', 'author_id');
    }
}