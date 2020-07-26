<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Game;

class GameResultInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 試合結果一覧画面表示
     *
     * @return view
     */
    public function index(Game $games)
    {
        // 試合予定一覧取得
        $gameList = $games->getGameList('<');

        return view('cms.game.result.listGameResultInfo')->with('gameList', $gameList);
    }

    /**
     * 試合結果要録画面表示
     *
     * @return view
     */
    public function edit_index($id)
    {
        // 試合予定一覧取得
        $getGame = Game::findOrFail($id);

        return view('cms.game.result.gameResultInfo')->with([
            'game' => $getGame,
            'id' => $id
        ]);
    }

    /**
     * 試合結果登録処理
     *
     * @param Request $request
     *
     * @return view
     */
    public function update(Request $request)
    {
        // バリデーション
        $validatedData = $request->validate([
            'get_point' => 'required|integer',
            'lost_point' => 'required|integer',
        ]);

        // 入力値設定
        $id = $request->input('id');
        $posts = [
            'get_point' => $validatedData['get_point'],
            'lost_point' => $validatedData['lost_point'],
        ];

        // IDをキーにレコード検索
        $game = Game::findOrFail($id);

        // 値を代入
        $game->get_point = $posts['get_point'];
        $game->lost_point = $posts['lost_point'];

        // 更新処理
        $game->save();

        return view('cms.game.result.confirmGameResultInfo');
    }

    /**
     * 試合結果削除処理
     *
     * @param int $id
     *
     * @return view
     */
    public function delete(int $id)
    {
        // 削除対象の試合を抽出
        $deleteGame = Game::find($id);

        // 削除処理実行
        $deleteGame->delete();

        return redirect()->to('/cms/game/result');
    }
}
