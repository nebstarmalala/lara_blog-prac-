@extends('layouts.layout')

@section('content')
<div class="wrapper create-blog">
    <h1>Create a new blog</h1>
    <form action="" method="post">
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
            <label for="author">Author</label>
            <input type="text" id="author" name="author">
            <input type="submit" value="Create Blog">
    </form>
    <br><br>
</div>
@endsection