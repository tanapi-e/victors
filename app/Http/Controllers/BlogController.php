<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index(Blog $blogs)
    {
        // ブログ全件取得
        $blogList = $blogs->getBlogList();

        return view('blog.index')->with('blogList', $blogList);
    }

    public function detail(Blog $blogs, $id)
    {
        // IDをキーに1件取得
        $getBlogs = $blogs->detailBlog($id);

        return view('blog.detail')
            ->with([
                'id' => $getBlogs->id,
                'title' => $getBlogs->title,
                'content' => $getBlogs->content,
                'date' => $getBlogs->created_at->format('Y-m-d')
            ]);
    }
}
