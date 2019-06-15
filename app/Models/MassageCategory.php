<?php

namespace App\Models;

use App\Scopes\LocaleScope;
use Illuminate\Database\Eloquent\Model;

class MassageCategory extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'text',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'locale'
    ];

    protected  static  function  boot()
    {
        parent::boot();
        static::addGlobalScope(new LocaleScope());
    }
}
