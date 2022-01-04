@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-3">
        <h2>
            <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
@endsection