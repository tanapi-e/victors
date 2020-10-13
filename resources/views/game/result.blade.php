@extends('layouts.common')

@section('content')
<div id="wrapper">
    <h2 class="title pageTitle">
        <strong>GAME</strong>
    </h2>
    <div class="inner">
        <h3 class="detailTitle">試合結果</h3>
        <ul class="matchList">
            @foreach($resultGames as $resultGame)
            <li>
                <div class="team">
                    <p class="teamName">Victors</p>
                </div>
                <div class="gameInfo">
                    <strong>{{$resultGame->get_point}} - {{$resultGame->lost_point}}</strong>
                    <p>{{$resultGame->match_day}}</p>
                </div>
                <div class="team">
                    <p class="teamName">{{$resultGame->opponent_team}}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
