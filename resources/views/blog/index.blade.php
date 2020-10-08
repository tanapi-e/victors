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
                <a href="/blog/detail/{{ $blog->id }}">
                    <dl>
                        <dt class="blogDate">{{$blog->created_at->format('Y-m-d')}}</dt>
                        <dd class="blog_text">{{$blog->title}}</dd>
                    </dl>
                </a>
                @endforeach
            </div>
        </article>
    </div>
</div>
@endsection
