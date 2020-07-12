@extends('layouts.app')

@section('content')
<div class="container">
    <h1>試合結果登録</h1>
    <form action="/cms/game/result/confirm" method="post" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="date">得点</label>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">失点</label>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 text-center">
                <input type="submit" name="button" value="登録する" class="btn btn-primary btn-wide" />
            </div>
        </div>
    </form>
</div>
@endsection
