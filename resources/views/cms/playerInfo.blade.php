@extends('layouts.app')

@section('content')
<div class="container">
    <h1>選手情報登録</h1>
    <form action="" method="post" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">名前</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="名前を入力してください" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="age">年齢</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="age" name="age" placeholder="年齢" value="{{ old('age') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="age">背番号</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="uniform_number" name="uniform_number" placeholder="背番号" value="{{ old('uniform_number') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="position">ポジション</label>
            <div class="col-sm-2">
                <select name="position" id="position">
                    @foreach($positions as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="age">役職</label>
            <div class="col-sm-2">
                <select name="management_position" id="management_position">
                    @foreach($management_position as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
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
