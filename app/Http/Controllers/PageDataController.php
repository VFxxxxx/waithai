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

    public function aboutUpdate(Request $pageData)
    {
        PageData::where('slug', 'about')->updateOrCreate(
            [
                'slug' => 'about',
                'text' => $pageData->text,
                'locale' => $pageData->locale,
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
        PageData::where('slug', 'news')->updateOrCreate([
            'slug' => 'news',
            'text' => $request->text,
            'locale' => $request->locale,
        ]);
        return redirect()->route('page_data.news');
    }
}
