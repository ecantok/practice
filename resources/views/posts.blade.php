@extends('layouts.main')

@section('container')

    <h1 class="mb-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" name="search"  class="form-control" placeholder="Search..." value="{{ request('search') }}">
                    <button class="btn btn-danger" id="button-addon2">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="card-img-top">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                    By: <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> <br>
                    Category: 
                    {{-- Send ?category= --}}
                    <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/blog/{{ $posts[0]->slug  }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7) !important"><a href="/blog?category={{ $post->category->slug  }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                            By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a class="btn btn-primary" href="/blog/{{ $post->slug  }}">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-4">No post found.</p>
    @endif

@endsection