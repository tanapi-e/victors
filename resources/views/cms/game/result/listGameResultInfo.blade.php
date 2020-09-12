@extends('layouts.app')

@section('content')
<div class="container">
    <h1>試合結果一覧</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">チーム名</th>
                <th scope="col">試合日</th>
                <th scope="col">スコア</th>
                <th scope="col">編集</th>
                <th scope="col">削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gameList as $game)
                <tr>
                    <td>{{ $game->opponent_team }}</td>
                    <td>{{ $game->match_day }}</td>
                    <td>{{ $game->get_point }} - {{ $game->lost_point }}</td>
                    <td>
                        <a href="/cms/game/result/update/{{ $game->id }}" class="btn btn-primary btn-sm">編集</a>
                    </td>
                    <td>
                        <form action="/cms/game/result/delete/{{ $game->id }}" method="post">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <a href="/cms/game/schedule/" class="btn btn-primary btn-wide">試合予定を登録する</a>
        </div>
    </div>
    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
    @endif
</div>

<script src="{{ asset('js/cms.js') }}"></script>
@endsection

