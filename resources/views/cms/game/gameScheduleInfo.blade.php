@extends('layouts.app')

@section('content')
<div class="container">
    <h1>試合予定登録</h1>
    <form action="/cms/game/schedule/confirm" method="post" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="date">日時</label>
            <div class="col-sm-2">
                <input type="date" class="form-control" id="match_day" name="match_day" value="{{ old('match_day') }}">
                @if($errors->has('match_day'))
                    <span class="text-danger">{{ $errors->first('match_day') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">対戦相手</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="opponent_team" name="opponent_team" value="{{ old('opponent_team') }}">
                @if($errors->has('opponent_team'))
                    <span class="text-danger">{{ $errors->first('opponent_team') }}</span>
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
