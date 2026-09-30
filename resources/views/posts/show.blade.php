<a href="/posts/{{ $currentPost['slug'] }}">Español</a>
|
<a href="/en/posts/{{ $currentPost['slug_en'] }}">English</a>

<h1>{{ $post['title'] }}</h1>

<img src="http://127.0.0.1:8000/{{ $post['image_url'] }}" alt="{{ $post['title'] }}">

<p>{{ $post['excerpt'] }}</p>

<div>
    @foreach ($post['categories'] as $category)
        <span>{{ $category['name'] }}</span>
    @endforeach
</div>

<div>
    {!! $post['content'] !!}
</div>