<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* ブログ投稿内容一覧画面表示
     *
     * @return view
     */
    public function index(Blog $blogs)
    {
        // ブログ投稿一覧取得
        $blogList = $blogs->getBlogList();

        return view('cms.blog.listBlog')->with('blogList', $blogList);
    }

}
