<?php

namespace App\Http\Controllers\API;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_article');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            $article = Article::find($id);

            if($article)
                return ResponseFormatter::success(
                    $article,
                    'Data article berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data article tidak ada',
                    404
                );
        }

        $article = Article::query();
        return ResponseFormatter::success(
            $article->paginate($limit),
            'Data list article berhasil diambil'
        );
    }
}
