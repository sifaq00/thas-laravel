<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'category_id', 'author'];
    protected $casts = [
        'created_at' => 'datetime:Asia/Jakarta',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
