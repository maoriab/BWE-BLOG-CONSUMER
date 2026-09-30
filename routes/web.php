<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $response = Http::get('http://127.0.0.1:8000/api/posts');

    return $response->json();
});