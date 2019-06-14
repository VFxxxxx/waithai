<?php

namespace App\Models;

use App\Scopes\LocaleScope;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
      'title',
      'image',
      'text',
      'path',
      'position',
      'visible',
      'meta_title',
      'meta_keywords',
      'meta_description',
      'category_id',
      'video_link',
      'locale',
    ];

    protected  static  function  boot()
    {
        parent::boot();
        static::addGlobalScope(new LocaleScope());
    }

}
