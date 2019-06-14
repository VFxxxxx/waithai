<?php

namespace App\Services;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ArticleCategoryService {

    public function getOutData()
    {
        $categories = ArticleCategory::all();
        return $categories;
    }

    public function store(Request $request)
    {
        ArticleCategory::create($request->all());
    }

    public function getTableColumns()
    {
        return [
            [
                'data' => 'title',
                'column_name' => __('article.categories.columns.title'),
            ],
            [
                'data' => 'created_at',
                'column_name' => __('article.categories.columns.created_at'),
            ],
            [
                'data' => 'action',
                'column_name' => __('article.categories.columns.action'),
            ]
        ];
    }

    public function fields()
    {
        return [
            'title',
            'text',
            'position',
            'visible',
            'locale'
        ];
    }
}