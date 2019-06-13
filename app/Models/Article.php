<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
      'title',
      'slug',
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
}
