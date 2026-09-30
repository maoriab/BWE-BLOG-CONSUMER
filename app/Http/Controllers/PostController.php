<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/posts');

        $posts = $response->json();

        return view('posts.index', compact('posts'));
    }

    public function show($slug)
{
    $response = Http::get('http://127.0.0.1:8000/api/posts/es/' . $slug);

    $post = $response->json();

    $postsResponse = Http::get('http://127.0.0.1:8000/api/posts');

    $posts = $postsResponse->json();

    $currentPost = collect($posts)->firstWhere('slug', $slug);

    return view('posts.show', compact('post', 'currentPost'));
}

public function showEnglish($slug)
{
    $response = Http::get('http://127.0.0.1:8000/api/posts/en/' . $slug);

    $post = $response->json();

    $postsResponse = Http::get('http://127.0.0.1:8000/api/posts');

    $posts = $postsResponse->json();

    $currentPost = collect($posts)->firstWhere('slug_en', $slug);

    return view('posts.show', compact('post', 'currentPost'));
}
}