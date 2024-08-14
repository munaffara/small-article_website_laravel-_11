<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::get();
        return view('admin.article.add', compact("articles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;

        if($request->hasFile('article_image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('article_image')->getClientOriginalExtension();
            $img = $manager->read($request->file('article_image'));
            $img = $img->resize(300, 300);

            // $img->toPng(80)->save(base_path('public/uploads/articleImage/'.$name_gen));
            // $save_url = 'uploads/articleImage/'.$name_gen;
            // $article->image = $save_url;

            // Define the path and ensure the directory exists
            $path = public_path('uploads/articleImage/');
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Save the image to the defined path
            $img->save($path . $name_gen, 80, 'jpg');

            // Define the URL to save in the database
            $save_url = 'uploads/articleImage/' . $name_gen;
            $article->image = $save_url;
        }

        // if($request->file('article_image')) {
        //     $manager = new ImageManager(new Driver());
        //     $name_gen = hexdec(uniqid()).'.'.$request->file('article_image')
        //                 ->getClientOriginalExtension();
        //     $img = $manager->read($request->file('article_image'));
        //     $img = $img->resize(370, 246);

        //     $img->toJpeg(80)->save(base_path('public/uploads/articleImage/'.$name_gen));
        //     $save_url = 'uploads/articleImage/'.$name_gen;
        //     $article->image = $save_url;
        // }

        $article->save();

        return redirect()->route('article.index')->with('message', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
        // dd($request->all());
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;

        if($request->hasFile('article_image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('article_image')->getClientOriginalExtension();
            $img = $manager->read($request->file('article_image'));
            $img = $img->resize(300, 300);

            // Define the path and ensure the directory exists
            $path = public_path('uploads/articleImage/');
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Save the image to the defined path
            $img->save($path . $name_gen, 80, 'jpg');

            // Define the URL to save in the database
            $save_url = 'uploads/articleImage/' . $name_gen;
            $article->image = $save_url;
        }

        $article->save();

        return redirect()->route('article.index')->with('message', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('article.index')->with('message', 'Article deleted successfully.');
    }
}
