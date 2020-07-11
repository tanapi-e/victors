@extends('layouts.app')

@section('content')
<div class="container">
    <h1>試合予定一覧</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">チーム名</th>
                <th scope="col">試合日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gameList as $game)
                <tr>
                    <td>{{ $game->opponent_team }}</td>
                    <td>{{ $game->match_day }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
