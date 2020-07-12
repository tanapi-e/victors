<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameResultInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 試合結果登録画面表示
     *
     * @return view
     */
    public function index()
    {
        return view('cms.game.result.gameResultInfo');
    }
}
