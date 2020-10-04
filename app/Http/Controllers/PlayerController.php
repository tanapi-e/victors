<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Players;

class PlayerController extends Controller
{
    public function index(Players $players)
    {
        $playerList = $players->getAllPlayerList();

        return view('player.index')->with('playerList', $playerList);
    }
}
