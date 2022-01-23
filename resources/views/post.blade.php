@extends('layouts.main')

@section('container')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>
                    <h6>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></h6>
                    <h6>Category: <a href="/blog?category={{ $post->category->slug  }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
                </p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="d-block">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection