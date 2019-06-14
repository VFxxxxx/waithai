<?php

namespace App\Services;

use App\Models\Article;
use App\Models\ArticleCategory;

class ArticleService {

    public function getOutData()
    {
        $data = Article::paginate(15);
        return $data;
    }

    public function getTableColumns(){
        return [
            [
                'data' => 'title',
                'column_name' => __('article.columns.title'),
            ],
            [
                'data' => 'image',
                'column_name' => __('article.columns.image'),
            ],
            [
                'data' => 'category',
                'column_name' => __('article.columns.category'),
            ],
            [
                'data' => 'created_at',
                'column_name' => __('article.columns.created_at'),
            ],
            [
                'data' => 'action',
                'column_name' => __('article.columns.action'),
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
            'locale',
            'path',
            'meta_title',
            'meta_keywords',
            'meta_description',
            'video_link',
            'image',
            'category' => ArticleCategory::all(),
        ];
    }

}