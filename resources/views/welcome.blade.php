@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="content">
        <br>
        <img src="/img/blog_img.jpg" alt="Blog Logo" height="400">
        <div class="title m-b-md">
           BLOGS
        </div>
        <br>
        @foreach($blogs as $blog)
            <p>{{ $blog['author']}} -> {{ $blog['title'] }}</p>
        @endforeach
    </div>
</div>
@endsection

