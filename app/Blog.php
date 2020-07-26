<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    /**
     * 試合情報一覧取得処理
     *
     * @return Blog
     */
    public function getBlogList()
    {
        // 降順で返す
        return Blog::orderBy('created_at', 'desc')->get();
    }
}
