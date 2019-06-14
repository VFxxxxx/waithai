<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use App\Services\ArticleCategoryService;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    protected  $articleCategoryService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ArticleCategoryService $articleCategoryService)
    {
        $this->articleCategoryService = $articleCategoryService;
    }

    public function index()
    {
        $with = [
            'title'             => __('article.categories.index.title'),
            'new_title'         => __('article.categories.index.new_title'),
            'list'              => __('article.categories.index.list'),
            'method_create'     => route('article_categories.create'),
            'method_destroy'    => 'ArticleCategoryController@destroy',
            'method_edit'       => 'ArticleCategoryController@edit',
            'table_columns'     => $this->articleCategoryService->getTableColumns(),
            'data'              => $this->articleCategoryService->getOutData(),
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
        $with = [
            'title'             => __('article.categories.create.title'),
            'method_store'      => route('article_categories.store'),
            'fields'            => $this->articleCategoryService->fields(),
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
        $this->articleCategoryService->store($request);
        return redirect('/admin/article_categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategory $articleCategory)
    {
        $articleCategory->delete();
        return redirect()->back();
    }
}
