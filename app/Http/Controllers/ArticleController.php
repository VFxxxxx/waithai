<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
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

        $data = Article::all();

        $with = [
            'title'             => __('index.article.title'),
            'new_title'         => __('index.article.new_title'),
            'method_create'     => route('articles.create'),
            'method_destroy'    => 'ArticleController@destroy',
            'method_edit'       => 'ArticleController@edit',
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
            'title'             => __('create.article.title'),
            'method_store'      => route('articles.store'),
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
        $article = Article::create($request->all());
        if ($request->file('image')) {
            $signatureImage = $request->file('image')->store('images', 'public');
            $article->update(['image' => $signatureImage]);
        }
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
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
            'data'              => $article,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        if ($request->file('image')) {
            Storage::disk('public')->delete($article->image);
            $signatureImage = $request->file('image')->store('images', 'public');
            $article->update(['image' => $signatureImage]);
        }
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->image);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
