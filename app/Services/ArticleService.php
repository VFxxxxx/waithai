<?php

namespace App\Services;

use App\Models\Article;

class ArticleService {

    public function getOutData()
    {
        $articles = Article::paginate(15);
        return compact('articles');
    }

    public function getCategories()
    {
        
    }
}