<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_columns = [
            [
                'data' => 'title',
                'column_name' => __('fields.title'),
            ],
            [
                'data' => 'created_at',
                'column_name' => __('fields.created_at'),
            ],
            [
                'data' => 'action',
                'column_name' => __('fields.action'),
            ]
        ];

        $data = News::all();

        $with = [
            'title'             => __('index.news.title'),
            'new_title'         => __('index.news.new_title'),
            'method_create'     => route('news.create'),
            'method_destroy'    => 'NewsController@destroy',
            'method_edit'       => 'NewsController@edit',
            'table_columns'     => $table_columns,
            'data'              => $data,
        ];
        return view('panel.templates.index')->with($with);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = [
            'title',
            'slug',
            'text',
            'image',
            'published_at',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('create.news.title'),
            'method_store'      => route('news.store'),
            'fields'            => $fields,
        ];
        return view('panel.templates.create')->with($with);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = News::create($request->all());
        if ($request->file('image')) {
            $signatureImage = $request->file('image')->store('images', 'public');
            $news->update(['image' => $signatureImage]);
        }
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $fields = [
            'title',
            'slug',
            'text',
            'image',
            'published_at',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('edit.article.title'),
            'method_update'     => 'ArticleController@update',
            'fields'            => $fields,
            'data'              => $news,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->update($request->all());

        if ($request->file('image')) {
            Storage::disk('public')->delete($news->image);
            $signatureImage = $request->file('image')->store('images', 'public');
            $news->update(['image' => $signatureImage]);
        }
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        Storage::disk('public')->delete($news->image);
        $news->delete();
        return redirect()->route('articles.index');
    }
}
