<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePlayerRequest;
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

    public function create(CreatePlayerRequest $request, Players $post)
    {
        $postData = [
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'management_position' => $request->input('management_position'),
            'uniform_number' => $request->input('uniform_number'),
            'age' => $request->input('age'),
        ];
var_dump($postData);
        $create = $post->postPlayers($postData);

        return view('cms.player.confirmPlayersInfo');
    }
}
