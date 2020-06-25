@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pdBtm10">
                <div class="card-header">Game</div>
                <div class="card-body">
                    <a href="/cms/game">試合情報登録</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Player</div>
                <div class="card-body">
                    <a href="/cms/player">選手情報登録</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
