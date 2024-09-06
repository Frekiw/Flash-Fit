<?php

namespace App\Http\Controllers;

use App\Models\Tnc;
use App\Models\Banner;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function index()
{
    $totalArticles = Article::count();
    $totalBanners = Banner::count();
    $totalTncs = Tnc::count();
    $totalSettings = Setting::count();
    $article = Article::orderBy('created_at', 'desc')->paginate(1);
    $article2 = Article::orderBy('created_at', 'desc')->paginate(5);
    return view('cmss.index', compact('totalArticles','totalBanners','totalTncs','totalSettings','article','article2'));
}
}
