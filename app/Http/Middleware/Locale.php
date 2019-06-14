<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         * Если пользователь уже был на нашем сайте,
         * то в сессии будет значение выбранного им языка.
         * Проверяем, что у пользователя в сессии установлен доступный язык
         * Устанавливаем локаль приложения
         */
 /*       $raw_locale = Session::get('locale');

        dd($raw_locale);

        if (in_array($raw_locale, Config::get('app.locales'))) {
            $locale = $raw_locale;
        }
        else $locale = Config::get('app.locale');

        App::setLocale($locale);*/

//        dd(Config::get('app.locale'));
        return $next($request);
    }
}
