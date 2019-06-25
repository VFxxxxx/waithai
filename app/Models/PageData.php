<?php

namespace App\Models;

use App\Scopes\LocaleScope;
use Illuminate\Database\Eloquent\Model;

class PageData extends Model
{
    protected $fillable = [
        'text',
        'slug',
        'locale'
    ];

    protected  static  function  boot()
    {
        parent::boot();
        static::addGlobalScope(new LocaleScope());
    }
}
