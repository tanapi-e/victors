@extends('layouts.common')

@section('content')
<div id="wrapper">
    <article>
        <h2 class="title pageTitle">
            <strong>BLOG</strong>
        </h2>
        <div class="inner">
            <h3 class="detailTitle">{{ $title }}</h3>
            <p class="timeArea">
                <time style="float: right;">{{ $date }}</time>
            </p>
            <br />
            <div class="blogDetailContent">
                <p>{{ $content }}</p>
            </div>
        </div>
    </article>
</div>
@endsection
