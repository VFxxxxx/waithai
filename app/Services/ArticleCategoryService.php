<?php

namespace App\Services;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryService {

    public function getOutData()
    {
        $categories = ArticleCategory::all();
        return compact('categories');
    }

    public function store(Request $request)
    {
        ArticleCategory::create($request->all());
    }
}