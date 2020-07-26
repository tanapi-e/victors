@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ブログ投稿</h1>
    <form action="/cms/blog/confirm" method="post" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="date">タイトル</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">内容</label>
            <div class="col-sm-2">
                <textarea id="content" class="form-control textArea" name="content" cols="50" rows="10" value="{{ old('content') }}"></textarea>
                @if($errors->has('content'))
                    <span class="text-danger">{{ $errors->first('content') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 text-center">
                <input type="submit" name="button" value="登録する" class="btn btn-primary btn-wide" />
            </div>
        </div>
    </form>
</div>
@endsection
