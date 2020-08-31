<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    /**
     * 試合情報一覧取得処理
     *
     * @return Game
     */
    public function getGameList(string $comparisonOperator)
    {
        // 現在日付設定
        $today = Carbon::today();

        // 現在日付より前の試合を取得し返す
        return Game::where('match_day', $comparisonOperator, $today)->orderBy('match_day', 'asc')->get();
    }

    /**
     * 試合結果一件取得処理(最新)
     *
     * @return Game
     */
    public function getResultGame()
    {
        // 現在日付設定
        $today = Carbon::today();

        // 直近の試合結果一件取得
        return Game::where('match_day', '<', $today)->orderBy('match_day', 'desc')->first();
    }

    /**
     * 試合予定一件取得処理(最新)
     *
     * @return Game
     */
    public function getNextGame()
    {
        // 現在日付設定
        $today = Carbon::today();

        // 直近の試合予定一件取得
        return Game::where('match_day', '>', $today)->orderBy('match_day', 'asc')->first();
    }
}
