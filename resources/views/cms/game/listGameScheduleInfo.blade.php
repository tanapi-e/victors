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
                    <td>
                        <form action="/cms/game/schedule/delete/{{ $game->id }}" method="post">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('script')
    <script>
        $(function() {
            $('.btn-dell').click(function() {
                if (confirm('本当に削除しますか？')) {
                    alert('削除しました。');
                } else {
                    return false;
                }
            });
        });
    </script>
@endsection
