@extends('layouts.common')

@section('content')
<div id="main_image">
    <a href="#">
        <img src="../storage/images/IMG_9150.jpg" alt="main_image">
    </a>
</div>
<div id="wrapper">
    <div class="top_content game_zone">
        <h2 class="title">
            <strong>GAME</strong>
        </h2>
        <div class="game">
            <article>
                <section class="game_result">
                    <h2 class="title">
                        試合結果
                    </h2>
                    <div class="match">
                        <dl class="team">
                            <dt>Victors</dt>
                        </dl>
                        <dl class="score">
                            <dt>{{$resultGame->get_point}} - {{$resultGame->lost_point}}</dt>
                            <dd>{{$resultGame->match_day}}</dd>
                        </dl>
                        <dl class="team">
                            <dt>{{$resultGame->opponent_team}}</dt>
                        </dl>
                    </div>
                    <div class="btn">
                        <a href="#">以前の結果</a>
                    </div>
                </section>
                <section class="game_next">
                    <h2 class="title">
                        試合予定
                    </h2>
                    <div class="match">
                        @empty($nextGame)
                            <dl class="team">
                                <dt>試合予定はありません</dt>
                            </dl>
                        @else
                            <dl class="team">
                                <dt>Victors</dt>
                            </dl>
                            <dl class="next_date">
                                <dt>{{$nextGame->match_day}}</dt>
                            </dl>
                            <dl class="team">
                                <dt>{{$resultGame->opponent_team}}</dt>
                            </dl>
                        @endempty
                    </div>
                    @empty($nextGame)
                    @else
                    <div class="btn">
                        <a href="#">今後の予定</a>
                    </div>
                    @endempty
                </section>
            </article>
        </div>
    </div>
    <div class="top_content blog_zone">
        <article>
            <h2 class="title">
                <strong>BLOG</strong>
            </h2>
            <div class="blog_list">
                @foreach($newBlogs as $newBlog)
                <a href="#">
                    <dl>
                        <dt>{{$newBlog->created_at}}</dt>
                        <dd class="blog_text">{{$newBlog->title}}</dd>
                    </dl>
                </a>
                @endforeach
            </div>
            <div class="btn-form mt20">
                <a href="#">もっと見る</a>
            </div>
        </article>
    </div>
    <div class="top_content sns_zone">
        <article>
            <h2 class="title">
                <strong>SNS</strong>
            </h2>
            <div class="sns">
                <section class="insta">
                    <a href="https://www.instagram.com/victors_japan/">
                        <img src="../storage/images/insta_logo.png" width="200px" height="200px" alt="instagram">
                    </a>
                </section>
                <section class="teams">
                    <a href="https://teams.one/teams/victorsjapan">
                        <img src="../storage/images/teams_black.png" width="200px" height="50px" alt="teams">
                    </a>
                </section>
            </div>
        </article>
    </div>
</div>
@endsection
