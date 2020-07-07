<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'opponent_team', 'match_day', 'get_point', 'lost_point'
    ];

    /**
     * 試合予定登録処理
     *
     * @param array $postData
     *
     * @return Game
     */
    public function postGames(array $postData)
    {
        return Game::create($postData);
    }

}
