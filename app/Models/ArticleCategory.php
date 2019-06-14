<?php

namespace App\Models;

use App\Scopes\LocaleScope;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = [
        'title',
        'text',
        'position',
        'visible',
        'locale'
    ];

    protected  static  function  boot()
    {
        parent::boot();
        static::addGlobalScope(new LocaleScope());
    }
}
