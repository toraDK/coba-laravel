
@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($post as $post)
        <article class="mt-5">
            <h2>
                <a href="/post/{{ $post->slug }}">{{ $post->title}}</a>
            </h2>
            {{-- <h4>By: {{ $post->author }}</h4> --}}
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection