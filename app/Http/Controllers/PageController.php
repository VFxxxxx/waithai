<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Master;
use App\Models\News;
use App\Models\PageData;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $with = [
            'body_id' => 'body-home',
            'template' => 'home',
        ];

        return view('pages.home')->with($with);
    }

    public function gift()
    {
        $with = [
            'template' => 'gift',
            'header_class' => 'with-bg',
            'page_title' => 'Подарочные сертификаты',
            'b1' => 'Главная',
            'b2' => 'Подарочные сертификаты',
        ];
        return view('pages.gift')->with($with);
    }

    public function contact()
    {
        $with = [
            'template' => 'contact',
            'header_class' => 'with-bg',
            'page_title' => 'Контакты',
            'b1' => 'Главная',
            'b2' => 'Контакты',
        ];
        return view('pages.contact')->with($with);
    }

    public function salons()
    {
        $with = [
            'template' => 'salons',
            'header_class' => 'with-bg',
            'page_title' => 'Наши салоны',
            'b1' => 'Главная',
            'b2' => 'Наши салоны',
        ];;
        return view('pages.salon')->with($with);
    }

    public function partners()
    {
        $with = [
            'template' => 'partners',
            'header_class' => 'with-bg',
            'page_title' => 'Наши партнеры',
            'b1' => 'Главная',
            'b2' => 'Наши партнеры',
            'data' => Partner::all(),
        ];
        return view('pages.partner')->with($with);
    }

    public function faq()
    {
        $with = [
            'template' => 'faq',
            'header_class' => 'with-bg',
            'page_title' => 'FAQ',
            'b1' => 'Главная',
            'b2' => 'FAQ',
        ];
        return view('pages.faq')->with($with);
    }

    public function about()
    {
        $with = [
            'template' => 'about',
            'header_class' => 'with-bg',
            'page_title' => 'О нас',
            'b1' => 'Главная',
            'b2' => 'О нас',
            'pageData' => PageData::where('slug', 'about')->first()->text,
        ];
        return view('pages.about')->with($with);
    }

    public function articles()
    {
        $with = [
            'template' => 'articles',
            'header_class' => 'with-bg',
            'page_title' => 'Статьи',
            'b1' => 'Главная',
            'b2' => 'Статьи',
            'articles' => Article::published()->paginate(15),
            'pageData' => PageData::where('slug', 'news')->first()->text,
        ];
        return view('pages.article')->with($with);
    }

    public function news()
    {
        $with = [
            'template' => 'news',
            'header_class' => 'with-bg',
            'page_title' => 'Новости',
            'b1' => 'Главная',
            'b2' => 'Новости',
            'articles' => News::published()->paginate(15),
            'pageData' => PageData::where('slug', 'news')->first()->text,
        ];
        return view('pages.article')->with($with);
    }

    public function latestNews()
    {
        $news = News::published();
        $with = [
            'template' => 'latestNews',
            'header_class' => 'with-bg',
            'page_title' => 'Новости',
            'b1' => 'Главная',
            'b2' => 'Новости',
            'articles' => Article::published()->union($news)->latest()->paginate(15),
            'pageData' => PageData::where('slug', 'news')->first()->text,
        ];
        return view('pages.article')->with($with);
    }

    public function articleDetail($slug)
    {
        if ($slug) {
            $article = Article::where('slug', $slug)->first();
            if (empty($article)) {
                $article = News::where('slug', $slug)->first();
            }
        }
        if ($article) {
            $with = [
                'template' => 'article_open',
                'header_class' => 'with-bg',
                'page_title' => 'Новости',
                'b1' => 'Главная',
                'b2' => 'Новости',
                'b2' => $article->title,
                'article' => $article,
            ];
            return view('pages.article_open')->with($with);
        } else {
            return redirect()->back();
        }
    }

    public function reviews()
    {
        $with = [
            'template' => 'reviews',
            'header_class' => 'with-bg',
            'page_title' => 'Отзывы',
            'b1' => 'Главная',
            'b2' => 'Отзывы',
            'review' => Review::published()->paginate(15),
        ];
        return view('pages.reviews')->with($with);
    }

    public function franchise()
    {
        $with = [
            'template' => 'franchise',
            'header_class' => 'with-bg',
            'page_title' => 'Франчайзинг',
            'b1' => 'Главная',
            'b2' => 'Франчайзинг',
        ];
        return view('pages.franchise')->with($with);
    }

    public function videos()
    {
        $with = [
            'video' => true,
            'template' => 'videos',
            'header_class' => 'with-bg',
            'page_title' => 'Видео',
            'b1' => 'Главная',
            'b2' => 'Видео',
            'articles' => Video::published()->paginate(15),
        ];
        return view('pages.article')->with($with);
    }

    public function masters()
    {
        $with = [
            'template' => 'team',
            'header_class' => 'with-bg',
            'page_title' => 'Мастера',
            'b1' => 'Главная',
            'b2' => 'Мастера',
            'masters' => Master::published()->get(),
        ];
        return view('pages.team')->with($with);
    }
}
