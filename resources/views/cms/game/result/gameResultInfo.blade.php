@extends('layouts.app')

@section('content')
<div class="container">
    <h1>試合結果登録</h1>
    <form action="/cms/game/result/confirm" method="post" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="get_point">得点</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="get_point" name="get_point" value="{{ old('get_point') }}">
                @if($errors->has('get_point'))
                    <span class="text-danger">{{ $errors->first('get_point') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="lost_point">失点</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="lost_point" name="lost_point" value="{{ old('lost_point') }}">
                @if($errors->has('lost_point'))
                    <span class="text-danger">{{ $errors->first('lost_point') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 text-center">
                <input type="submit" name="button" value="登録する" class="btn btn-primary btn-wide" />
            </div>
        </div>
        @if (session('message'))
            <span class="text-danger">{{ session('message') }}</span>
        @endif
        <input type="hidden" name="id" value="{{$id}}">
    </form>
</div>
@endsection
