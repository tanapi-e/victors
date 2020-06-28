@extends('layouts.app')

@section('content')
<div class="container">
    <h1>選手情報一覧</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">背番号</th>
                <th scope="col">名前</th>
                <th scope="col">年齢</th>
                <th scope="col">ポジション</th>
                <th scope="col">役職</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($playerList as $player)
                <tr>
                    <td>{{ $player->uniform_number }}</td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->age }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->management_position }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <a href="/cms/player" class="btn btn-primary btn-wide">選手情報を登録する</a>
        </div>
    </div>
</div>
@endsection
