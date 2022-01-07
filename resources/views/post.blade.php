@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-4">{{ $post->title }}</h1>

        <p>
            <h6>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a></h6>
            <h6>Category: <a href="/categories/{{ $post->category->slug  }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
        </p>

        {!! $post->body !!}
    </article>
    <a href="/blog" class="d-block">Back to Posts</a>
@endsection