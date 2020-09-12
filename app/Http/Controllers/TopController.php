<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Blog;

class TopController extends Controller
{
    public function index(Game $game, Blog $blog)
    {
        // 直近の試合結果一件取得
        $resultGame = $game->getResultGame();

        // 直近の試合予定取得
        $nextGame = $game->getNextGame();

        // 最新5件のBlog取得
        $newBlogs = $blog->getNewBlog();

        return view('top')->with([
            'resultGame' => $resultGame,
            'nextGame' => $nextGame,
            'newBlogs' => $newBlogs
        ]);
    }
}
