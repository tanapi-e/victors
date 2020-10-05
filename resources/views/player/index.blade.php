@extends('layouts.common')

@section('content')
<div id="wrapper">
    <h2 class="title">所属選手</h2>
    <div class="playerPageArea">
        <ul class="playerUl">
            <!-- 仮作成 -->
            @foreach ($playerList as $player)
            <li class="playerList">
                <div class="playerInfo">
                    <span class="uniNumner">
                        {{ $player->uniform_number }}
                    </span>
                    <p class="profile">
                        <strong>{{ $player->name }}</strong>

                        <span>
                            {{ $player->position }} / {{ $player->age }} / {{ $player->management_position }}
                        </span>
                    </p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
