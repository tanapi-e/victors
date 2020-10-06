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
}
