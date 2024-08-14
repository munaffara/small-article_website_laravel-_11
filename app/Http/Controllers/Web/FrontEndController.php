<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function showHomePage()
    {
        // Fetch only articles where status is 1
        $articles = Article::where('status', 1)->get();

        // Pass data to the view
        return view('web.home', compact('articles'));
    }

    public function showArticleDetails($id)
    {
        // Fetch the article by ID
        $article = Article::findOrFail($id);

        $article->description = strip_tags($article->description);

        // Pass the article data to the details view
        return view('web.details', compact('article'));
    }
}
