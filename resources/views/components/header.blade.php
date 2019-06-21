<header @if(isset($header_class))class="{{ $header_class }}"@endif>
    <div class="top-gradient"></div>
    <div class="cloudy" data-stellar-rato="2" style="background-position-x: 10px;"></div>
    <div class="container-fluid">
        <a href="{{ route('index') }}" class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Wai Thai">
        </a>
        <button id="main-menu-btn" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu"
                aria-expanded="true">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav id="main-menu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav nav-menu">
                <li class="first">
                    <a href="/ru/massage-category/pajamas" class="item">Массажи
                        <span class="underline"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('gift') }}" class="item">Подарочные сертификаты
                        <span class="underline"></span>
                    </a>
                </li>
                <li class="bordered">
						<span class="item">Акции
							<span class="underline"></span>
						</span>
                    <ul class="menu_level_1">
                        <li class="first">
                            <a href="/ru/stock">Акции</a>
                        </li>
                        <li class="last">
                            <a href="/ru/privilege">Привилегии</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('masters') }}" class="item">Мастера
                        <span class="underline"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('videos') }}" class="item">Видео
                        <span class="underline"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('franchise') }}" class="item">Франчайзинг
                        <span class="underline"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('reviews') }}" class="item">Отзывы
                        <span class="underline"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('latest-news') }}" class="item">Новости
                        <span class="underline"></span>
                    </a>
                </li>
                <li>
						<span class="item">О компании
							<span class="underline"></span>
						</span>
                    <ul class="menu_level_1">
                        <li class="first">
                            <a href="{{ route('salons') }}">Наши салоны</a>
                        </li>
                        <li>
                            <a href="{{ route('partners') }}">Наши партнеры</a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}">FAQ</a>
                        </li>
                        <li class="last">
                            <a href="{{ route('about-us') }}">О нас</a>
                        </li>
                    </ul>
                </li>
                <li class="last">
                    <a href="{{ route('contact') }}" class="item">Контакты
                        <span class="underline"></span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="right-block">
            <div class="languages">
                <a class="item <?= App\Http\Middleware\LocaleMiddleware::getLocale() === 'ua' ? 'active' : '' ?>" href="{{ route('setlocale', ['lang' => 'ua']) }}">UA
                    <span class="underline small"></span>
                </a>
                <a class="item <?= (App\Http\Middleware\LocaleMiddleware::getLocale() != 'ua' && App\Http\Middleware\LocaleMiddleware::getLocale() != 'en')  ? 'active' : '' ?>" href="{{ route('setlocale', ['lang' => 'ru']) }}">RU
                    <span class="underline small"></span>
                </a>
                <a class="item <?= App\Http\Middleware\LocaleMiddleware::getLocale() === 'en' ? 'active' : '' ?>" href="{{ route('setlocale', ['lang' => 'en']) }}">EN
                    <span class="underline small"></span>
                </a>
            </div>
            <div class="phones">
                050 503-33-58
                <br> 093 762-36-23

            </div>
            <div class="city-btn-block">
						<span class="city-btn" data-toggle="modal" data-target="#city-change">
                            Львов
                        </span>
            </div>
            <div class="order-btn-massage hidden-xs" data-toggle="modal" data-target="#order-form">
                Заказать
                <br>массаж
            </div>
        </div>
    </div>
    @if(isset($template) && $template != 'home')
        <div class="title-block"><h1 class="page-title">{{ $page_title }}</h1>
            <div class="breadcrumbs">
                <a href="{{ route('index') }}">{{ $b1 }}</a><span class="sep">&gt;</span><span>{{ $b2 }}@if(isset($b3))<span class="sep">&gt;</span><span>{{ $b3 }}@endif</span>
            </div>
        </div>
    @endif
</header>