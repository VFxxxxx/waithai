<div class="article-category-list container">
    <div class="row">
        <div class="col-sm-3 col-md-2"><a class="item {{ Request::is('latest-news*') ? 'active' : '' }}"
                                          href="{{ route('latest-news') }}">
                Все
                <span class="pointer"></span></a></div>
        <div class="col-sm-3 col-md-2"><a class="item {{ Request::is('news*') ? 'active' : '' }}"
                                          href="{{ route('news') }}">
                Новости
                <span class="pointer"></span></a></div>
        <div class="col-sm-3 col-md-2"><a class="item  {{ Request::is('articles*') ? 'active' : '' }}"
                                          href="{{ route('articles') }}">
                Статьи
                <span class="pointer"></span></a></div>
    </div>
</div>