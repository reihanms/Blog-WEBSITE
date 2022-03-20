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
            <p>By. <a href="/blog?user={{ $postingan->user->username }}"class="text-decoration-none">{{ $postingan->user->name }}</a> in Category : 
            <a class="text-decoration-none"href="/blog?category={{ $postingan->category->slug }}">{{ $postingan->category->name }}</a></p>
            <img src="https:source.unsplash.com/1200x400?{{ $postingan->category->name }}" class="card-img-top" alt="...">
            <article class="my-3 fs-5">
            <p>{!! $postingan->body !!}  <!-- escape !--></p>
            </article>
            
            <a href="/blog"class="text-decoration-none btn btn-primary mb-5">Kembali ke blog</a>
        </div>
    </div>
</div>
    

    <div class="container">
        <div class="row">
            @foreach ($postingan->skip(1) as $postingan )
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="position-absolute  text-white px-2 py-1" style="background-color: rgba(0, 0, 0, 0.5)">
                        {{ $postingan->category->name }}
                    </div>
                    <img src="https:source.unsplash.com/500x400?{{ $postingan->category->name }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $postingan->title }}</h5>

                      <small class="text-muted">
                        <p>By. <a href="/userpost/{{ $postingan->user->username }}"class="text-decoration-none">{{ $postingan->user->name }}</a> {{ $postingan->created_at->diffForHumans() }}</p>
                        </small>

                      <p class="card-text">{{ $postingan->excerpt }} </p>
                      <a href="/halaman-postingan/{{ $postingan->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection