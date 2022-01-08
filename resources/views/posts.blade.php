@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>
            By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <br>
            Category: 
            <a href="/categories/{{ $post->category->slug  }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
        
        <p>{{ $post->excerpt }}</p>
        
        <a href="/blog/{{ $post->slug  }}">Read more..</a>
    </article>
    @endforeach
@endsection