@extends('layouts.common')

@section('content')
<div id="wrapper">
    <h2 class="title pageTitle">
        <strong>GAME</strong>
    </h2>
    <div class="inner">
        <h3 class="detailTitle">試合予定</h3>
        @empty($newGame)
            <p class="empty">試合予定はありません</p>
        @else
        <ul class="matchList">
            @foreach($newGames as $newGame)
            <li>
                <div class="team">
                    <p class="teamName">Victors</p>
                </div>
                <div class="gameInfo">
                    <!--<strong>{{$newGame->get_point}} - {{$newGame->lost_point}}</strong>-->
                    <p>{{$newGame->match_day}}</p>
                </div>
                <div class="team">
                    <p class="teamName">{{$newGame->opponent_team}}</p>
                </div>
            </li>
            @endforeach
        </ul>
        @endempty
    </div>
</div>
@endsection
