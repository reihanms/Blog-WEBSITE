@extends('layouts.main')

@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="judul mb-4">
            <h2>{{ $postingan->title }}</h2>
            <small>
                {{ $postingan->created_at->diffForHumans() }}
            </small>
            </div>
            <p>By. <a style="color:#0069D9"href="/blog?user={{ $postingan->user->username }}"class="text-decoration-none">{{ $postingan->user->name }}</a> in Category : 
            <a style="color:#0069D9"class="text-decoration-none"href="/blog?category={{ $postingan->category->slug }}">{{ $postingan->category->name }}</a></p>
            @if ($postingan->image)
            <div style="max-height:350px; overflow:hidden">
            <img src="{{ asset('storage/' . $postingan->image) }}" class="card-img-top" alt="...">
            </div>
            @else
            <img src="https:source.unsplash.com/1200x400?{{ $postingan->category->name }}" class="card-img-top" alt="...">
            @endif
            
            <article class="my-3 fs-5">
            <p>{!! $postingan->body !!}  <!-- escape !--></p>
            </article>
            
            <a href="/blog"class="text-decoration-none btn btn-primary mb-5">Kembali ke blog</a>
        </div>
    </div>
</div>
@endsection