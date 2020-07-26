<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GamesFormRequest;
use App\Game;

class GameScheduleInfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 試合情報登録画面表示
     *
     * @return view
     */
    public function index()
    {
        return view('cms.game.schedule.gameScheduleInfo');
    }

    /**
     * 試合情報登録完了画面表示(DB登録)
     *
     * @param GamesFormRequest $request
     * @param Game $post
     *
     * @return view
     */
    public function create(GamesFormRequest $request, Game $games)
    {
        // validate通過したデータを配列に格納
        $posts = [
            'opponent_team' => $request->input('opponent_team'),
            'match_day' => $request->input('match_day'),
        ];

        // 試合情報登録
        $create = $games->postGames($posts);

        return view('cms.game.schedule.confirmGameScheduleInfo');
    }

    /**
     * 試合予定一覧画面表示
     *
     * @param Game $games
     *
     * @return view
     */
    public function getGameSchedule(Game $games)
    {
        // 試合予定一覧取得
        $gameList = $games->getGameList('>');

        return view('cms.game.schedule.listGameScheduleInfo')->with('gameList', $gameList);
    }

    /**
     * 試合予定削除処理
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

        return redirect()->to('/cms/game/schedule/list');
    }
}
