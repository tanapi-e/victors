<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = [
        'name', 'age', 'position', 'management_position', 'uniform_number'
    ];

    /**
     * 選手情報登録処理
     *
     * @param array $postData
     *
     * @return Players
     */
    public function postPlayers(array $postData)
    {
        return Players::create($postData);
    }
    /**
     * 選手情報一覧取得処理
     *
     * @return Players
     */
    public function getAllPlayerList()
    {
        return Players::orderBy('uniform_number', 'asc')->get();
    }
}
