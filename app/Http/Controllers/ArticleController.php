<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::all();
 
        return view('articles.index', [
         'article' => $article
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('thumbnail'))
        {
            $thumbnailPath = $request->file('thumbnail')->store('assets/article', 'public');
            $data['thumbnail'] = $thumbnailPath;
        }
        Article::create($data);

        return redirect()->route('articles.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, $id_article)
    {
        $article = article::findOrFail($id_article);
        $data = $request->all();

        if($request->hasFile('thumbnail'))
        {
            Storage::delete('public/'.$article->thumbnail);
            $thumbnailPath = $request->file('thumbnail')->store('assets/article', 'public');
            $data['thumbnail'] = $thumbnailPath;
        }
        
        $article->update($data);
        
        return redirect()->route('articles.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Storage::delete('public/' . $article->thumbnail);
        $article->delete();

        return redirect()->route('articles.index')->with('status','Berhasil Hapus Data');
    }
}
