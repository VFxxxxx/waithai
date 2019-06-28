<?php

namespace App\Http\Controllers;

use App\Models\PageData;
use Illuminate\Http\Request;

class PageDataController extends Controller
{
    public function about()
    {
        $fields = [
            'text',
        ];

        $with = [
            'title' => __('edit.about.title'),
            'method_update' => 'PageDataController@aboutUpdate',
            'fields' => $fields,
            'data' => PageData::where('slug', 'about')->first(),
        ];

        return view('panel.templates.edit')->with($with);
    }

    public function aboutUpdate(Request $request)
    {
        PageData::where('slug', 'about')->updateOrCreate(
            [
                'slug' => 'about',
                'locale' => $request->locale,
            ],
            [
                'slug' => 'about',
                'text' => $request->text,
                'locale' => $request->locale,
            ]);
        return redirect()->route('page_data.about');
    }

    public function news()
    {
        $fields = [
            'text',
        ];

        $with = [
            'title' => __('edit.news.title'),
            'method_update' => 'PageDataController@newsUpdate',
            'fields' => $fields,
            'data' => PageData::where('slug', 'news')->first(),
        ];

        return view('panel.templates.edit')->with($with);
    }

    public function newsUpdate(Request $request)
    {
        PageData::where('slug', 'news')->updateOrCreate(
        [
            'slug' => 'news',
            'locale' => $request->locale,
        ],
        [
            'slug' => 'news',
            'text' => $request->text,
            'locale' => $request->locale,
        ]);
        return redirect()->route('page_data.news');
    }

    public function faq()
    {
        $fields = [
            'text',
        ];

        $with = [
            'title' => __('edit.faq.title'),
            'method_update' => 'PageDataController@faqUpdate',
            'fields' => $fields,
            'data' => PageData::where('slug', 'faq')->first(),
        ];

        return view('panel.templates.edit')->with($with);
    }

    public function faqUpdate(Request $request)
    {
        PageData::where('slug', 'faq')->updateOrCreate(
            [
                'slug' => 'faq',
                'locale' => $request->locale,
            ],
            [
                'slug' => 'faq',
                'text' => $request->text,
                'locale' => $request->locale,
            ]);
        return redirect()->route('page_data.faq');
    }
}
