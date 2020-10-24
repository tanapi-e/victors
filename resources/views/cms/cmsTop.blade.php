@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pdBtm10">
                <div class="card-header">Game</div>
                <div class="card-body">
                    <a href="/cms/game/result/list">試合結果</a>
                </div>
            </div>
            <div class="card pdBtm10">
                <div class="card-header">Game</div>
                <div class="card-body">
                    <a href="/cms/game/schedule/list">試合予定</a>
                </div>
            </div>
            <div class="card pdBtm10">
                <div class="card-header">Player</div>
                <div class="card-body">
                    <a href="/cms/player/list">選手情報</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Blog</div>
                <div class="card-body">
                    <a href="/cms/blog">ブログ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
