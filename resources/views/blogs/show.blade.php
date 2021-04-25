@extends('layouts.layout')

@section('content')
<div class="wrapper blog-details">
    <h2>{{ $blog->title }}</h2>
    <p>{{$blog->body }}</p>
    <p>By {{$blog->author}}</p>
</div>
<a href="/blogs" class="back">Back to Blogs</a>
@endsection