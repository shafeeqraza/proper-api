<?php

namespace App\Models;

use App\Builders\ThreadBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;

class Thread extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'author_id',
        'slug',
        'title',
        'body',
        'like_count',
        'share_count',
        'reply_count'
    ];

    public function newEloquentBuilder($query)
    {
        return new ThreadBuilder($query);
        QueryBuilder::for()
    }
}
