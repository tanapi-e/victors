<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogsFormRequest;
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
    /**
     * ブログ投稿画面表示
     *
     * @return view
     */
    public function create_index()
    {
        return view('cms.blog.createBlog');
    }

    /**
     * ブログ投稿完了画面表示(DB登録)
     *
     * @param BlogsFormRequest $request
     * @param Game $post
     *
     * @return view
     */
    public function create(BlogsFormRequest $request, Blog $blogs)
    {
        // validate通過したデータを配列に格納
        $posts = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];

        // ブログ投稿処理
        $blogs->createBlogs($posts);

        return view('cms.blog.confirmBlog');
    }

    /**
     * 投稿削除処理
     *
     * @param int $id
     *
     * @return view
     */
    public function delete(int $id)
    {
        // 削除対象の試合を抽出
        $deleteBlog = Blog::find($id);

        // 削除処理実行
        $deleteBlog->delete();

        return redirect()->to('/cms/blog');
    }
}
