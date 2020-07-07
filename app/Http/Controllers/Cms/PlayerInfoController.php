<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PlayersFormRequest;
use App\Players;

class PlayerInfoController extends Controller
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
     * 選手情報登録画面表示
     *
     * @return view
     */
    public function index()
    {
        // プルダウンメニュー用に設定
        $positions = config('const.position');
        $management_position = config('const.management_position');

        return view('cms.player.playerInfo', [
            'positions' => $positions,
            'management_position' => $management_position
        ]);
    }

    /**
     * 選手情報登録完了画面表示(DB登録)
     *
     * @param PlayersFormRequest $request
     * @param Players $players
     *
     * @return view
     */
    public function create(PlayersFormRequest $request, Players $players)
    {
        // validate通過したデータを配列に格納
        $posts = [
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'management_position' => $request->input('management_position'),
            'uniform_number' => $request->input('uniform_number'),
            'age' => $request->input('age'),
        ];

        // 配列に格納したデータをDBへ登録
        $create = $players->postPlayers($posts);

        return view('cms.player.confirmPlayersInfo');
    }

    /**
     * 選手情報登録完了画面表示(DB登録)
     *
     * @param Players $players
     *
     * @return view
     */
    public function getPlayerList(Players $players)
    {
        // 選手情報全件取得
        $playerList = $players->getAllPlayerList();

        return view('cms.player.listPlayersInfo')->with('playerList', $playerList);
    }
}
