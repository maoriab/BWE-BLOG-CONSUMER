@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-extrabold text-blue-900 font-spartan">
    Posts
</h1>

@foreach ($posts as $post)

    <h2 class="text-xl font-bold text-gray-900 mt-6">
        <a href="/posts/{{ $post['slug'] }}" class="hover:text-blue-700">
            {{ $post['title'] }}
        </a>
    </h2>

    <p class="text-gray-600 mt-2">
        {{ $post['excerpt'] }}
    </p>

@endforeach

@endsection