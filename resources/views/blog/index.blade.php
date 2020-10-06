@extends('layouts.common')

@section('content')
<div id="wrapper">
    @foreach ($blogList as $blog)
        <td>{{ $blog->title }}</td>
        <td>{{ Str::limit($blog->content, 20, '(...)') }}</td>
        <td>{{ $blog->created_at }}</td>
    @endforeach
</div>
@endsection
