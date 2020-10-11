<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    public function index(Game $game)
    {
        // 直近の試合結果一件取得
        $resultGame = $game->getResultGame();

        // 直近の試合予定取得
        $nextGame = $game->getNextGame();

        return view('game.index')->with([
            'resultGame' => $resultGame,
            'nextGame' => $nextGame
        ]);
    }
}
