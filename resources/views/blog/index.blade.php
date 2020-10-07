@extends('layouts.common')

@section('content')
<div id="wrapper">
    <div class="top_content blog_zone">
        <article>
            <h2 class="title pageTitle">
                <strong>BLOG</strong>
            </h2>
            <div class="blog_list">
                @foreach($blogList as $blog)
                <a href="#">
                    <dl>
                        <dt class="blogDate">{{$blog->created_at->format('Y-m-d')}}</dt>
                        <dd class="blog_text">{{$blog->title}}</dd>
                    </dl>
                </a>
                @endforeach
            </div>
        </article>
    </div>
    <!--<section class="blogSection">
        <div class="blog_list">
            @foreach($blogList as $blog)
            <a href="#">
                <dl>
                    <dt>{{$blog->created_at->format('Y-m-d')}}</dt>
                    <dd class="blog_text">{{$blog->title}}</dd>
                </dl>
            </a>
            @endforeach
        </div>
        <ul>
            @foreach ($blogList as $blog)
            <li>
                <a href="">
                    <div class="blogList">
                        <dl class="date">
                            <dt>{{ $blog->created_at->format('Y/m/d') }}</dt>
                        </dl>
                        <dl class="blogTitle">
                            <dd>{{ $blog->title }}</dd>
                        </dl>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>-->
    </section>
</div>
@endsection
