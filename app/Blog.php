<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    /**
     * ブログ投稿一覧取得処理
     *
     * @return Blog
     */
    public function getBlogList()
    {
        // 降順で返す
        return Blog::orderBy('created_at', 'desc')->get();
    }

    /**
     * ブログ投稿登録処理
     *
     * @param array $postData
     *
     * @return Blog
     */
    public function createBlogs(array $postData)
    {
        return Blog::create($postData);
    }
}
