@extends('layouts.common')

@section('content')
<div id="wrapper">
    <h2 class="title">所属選手</h2>
    <ul>
        <!-- 仮作成 -->
        @foreach ($playerList as $player)
            <li>{{ $player->uniform_number }}{{ $player->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
