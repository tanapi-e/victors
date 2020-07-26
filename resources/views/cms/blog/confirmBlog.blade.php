@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ブログ投稿</h1>
    <div class="alert alert-success mgtp30 mgbt30" role="alert">
        ブログの投稿が完了しました。
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <a href="/cms/blog/" class="btn btn-primary btn-wide">ブログ投稿一覧へ戻る</a>
        </div>
    </div>
</div>
@endsection
