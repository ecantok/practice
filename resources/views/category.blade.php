@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category: {{ $category }}</h1>

    @foreach ($posts as $post)
    <article class="mb-3">
        <h3>
            <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
        </h3>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

    <a href="/categories">Back to Categories</a>
@endsection