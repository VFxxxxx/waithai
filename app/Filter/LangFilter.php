<?php

namespace App\Filter;

use App\Http\Middleware\LocaleMiddleware;
use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Illuminate\Contracts\Translation\Translator;

class LangFilter implements FilterInterface
{
    protected $langGenerator;

    public function __construct(Translator $langGenerator)
    {
        $this->langGenerator = $langGenerator;
    }

    public function transform($item, Builder $builder)
    {
        if (isset($item['text'])) {
            $item['text'] = $this->langGenerator->trans($item['text']);
        }

        if (isset($item['url'])) {
            $item['url'] = route($item['url']);
            $item['href'] = $item['url'];
        }

        return $item;
    }
}