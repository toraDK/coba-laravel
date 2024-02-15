
@extends('layouts.main')

@section('container')

    @foreach ($post as $post)
        <article class="mt-5">
            <h2>
                <a href="/post/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <h4>By: {{ $post["author"] }}</h4>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection