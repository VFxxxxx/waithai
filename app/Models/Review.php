<?php

namespace App\Models;

use App\Scopes\LocaleScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'email',
        'text',
        'visible',
        'published_at',
        'locale'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeVisible($query)
    {
        $query->where('visible', 1);
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    protected  static  function  boot()
    {
        parent::boot();
        static::addGlobalScope(new LocaleScope());
    }
}
