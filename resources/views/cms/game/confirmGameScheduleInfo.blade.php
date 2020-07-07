@extends('layouts.app')

@section('content')
<div class="container">
    <h1>試合情報登録</h1>
    <div class="alert alert-success mgtp30 mgbt30" role="alert">
        登録完了しました。
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <a href="/cms/player/list" class="btn btn-primary btn-wide">試合情報一覧へ戻る</a>
        </div>
    </div>
</div>
@endsection
