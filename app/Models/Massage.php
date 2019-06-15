<?php

namespace App\Models;

use App\Scopes\LocaleScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'text',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'category_id',
        'image',
        'published_at',
        'locale'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\MassageCategory');
    }

    protected  static  function  boot()
    {
        parent::boot();
        static::addGlobalScope(new LocaleScope());
    }
}
