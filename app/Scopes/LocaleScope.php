<?php
/**
 * Created by PhpStorm.
 * User: Fedotov_V
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Config;

class LocaleScope implements  Scope
{
    /**
     * @param Builder $builder
     * @param Model $model
     */
    public function apply(Builder $builder, Model $model)
    {
        $locale = Config::get('app.locale');
        $builder->where($model->getTable() . '.locale', $locale);
    }

}
