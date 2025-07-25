<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];


    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_blog_tag');
    }
}
