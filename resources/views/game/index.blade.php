@extends('layouts.common')

@section('content')
<div id="wrapper">
    <h2 class="title pageTitle">
        <strong>GAME</strong>
    </h2>
    <div class="game">
        <article>
            <section class="game_result">
                <h3 class="detailTitle">試合結果</h3>
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
                    <a href="/game/result">以前の結果</a>
                </div>
            </section>
            <section class="game_next">
                <h3 class="detailTitle">試合予定</h3>
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
                        <dt>{{$nextGame->opponent_team}}</dt>
                    </dl>
                    @endempty
                </div>
                @empty($nextGame)
                @else
                <div class="btn">
                    <a href="/game/schedule">今後の予定</a>
                </div>
                @endempty
            </section>
        </article>
    </div>
</div>
@endsection
