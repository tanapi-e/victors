@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ブログ投稿一覧</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">タイトル</th>
                <th scope="col">内容</th>
                <th scope="col">作成日</th>
                <th scope="col">削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogList as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->content, 20, '(...)') }}</td>
                    <td>{{ $blog->created_at }}</td>
                    <td>
                        <form action="/cms/blog/delete/{{ $blog->id }}" method="post">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <a href="/cms/blog/create" class="btn btn-primary btn-wide">ブログを投稿する</a>
        </div>
    </div>
    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
    @endif
</div>
@endsection

@section('script')
    <script>
        $(function() {
            $('.btn-dell').click(function() {
                if (confirm('本当に削除しますか？')) {
                    alert('削除しました。');
                } else {
                    return false;
                }
            });
        });
    </script>
@endsection
