<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogContent extends Model
{
    use HasFactory;

    protected $primaryKey = 'cid';
    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\BlogContentFactory::new();
    }
}
