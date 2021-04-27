@extends('layouts.layout')

@section('content')
<div class="wrapper blog-details">
    <h2>{{ $blog->title }}</h2>
    <p>{{$blog->body }}</p>
    <p>By {{$blog->author}}</p>
</div>
<form action="/blogs/{{ $blog->id }}" method="post">
    @csrf
    @method("DELETE")
    <button>Delete Blog</button>
</form>
<a href="/blogs" class="back">Back to Blogs</a>
@endsection