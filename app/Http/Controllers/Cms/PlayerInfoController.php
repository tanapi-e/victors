<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return view('cms.playerInfo', [
            'positions' => $positions,
            'management_position' => $management_position
        ]);
    }
}
