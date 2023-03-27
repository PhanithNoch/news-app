<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'slug',
        'image',
        'is_published',
        'published_at',
        'category_id',
        'user_id'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

   
}
