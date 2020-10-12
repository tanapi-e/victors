@extends('layouts.common')

@section('content')
<div id="wrapper">
    <h2 class="title pageTitle">
        <strong>試合結果</strong>
    </h2>
    @foreach($resultGames as $resultGame)
    <dl class="score">
        <dt>{{$resultGame->get_point}} - {{$resultGame->lost_point}}</dt>
        <dd>{{$resultGame->match_day}}</dd>
    </dl>
    <dl class="team">
        <dt>{{$resultGame->opponent_team}}</dt>
    </dl>
    @endforeach
</div>
@endsection
