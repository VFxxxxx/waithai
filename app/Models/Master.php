<?php

namespace App\Models;

use App\Scopes\LocaleScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = [
        'name',
        'text',
        'certificate1',
        'certificate2',
        'certificate3',
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

    protected  static  function  boot()
    {
        parent::boot();
        static::addGlobalScope(new LocaleScope());
    }
}
