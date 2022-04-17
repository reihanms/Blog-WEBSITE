
@extends('layouts/main')

@section('isinya')

    <h1>{{ $title }}</h1>
    <div class="row justify-content-center"style="padding-top:20px;">
      <div class="col-md-6">
        <form action="/blog" method="GET">
          @if (request('category'))
          <input type="hidden"name="category"value="{{ request('category') }}">
          @endif
          @if (request('user'))
          <input type="hidden"name="user"value="{{ request('user') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text"name="search" value="{{ request('search') }}" class="form-control" placeholder="Cari Blog.." aria-label="Cari Blog" aria-describedby="button-addon2">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

@if ($blog->count())

<div class="card mb-3">
  {{-- validasi apakah user upload gambar atau engga --}}
    @if ($blog[0]->image)
    <div style="max-height:350px; overflow:hidden">
        <img src="{{ asset('storage/' . $blog[0]->image) }}" class="card-img-top" alt="...">
    </div>
    @else
    <img src="https:source.unsplash.com/1200x400?{{ $blog[0]->category->name }}" class="card-img-top" alt="...">
    @endif
    <div class="card-body text-center">
      <h5 class="card-title">{{ $blog[0]->title }}</h5>

      <small class="text-muted">
      <p>By. <a href="/blog?user={{ $blog[0]->user->username }}"class="text-decoration-none">{{ $blog[0]->user->name }}</a> in <a href="/blog?category={{ $blog[0]->category->slug }}"class="text-decoration-none">{{ $blog[0]->category->name }}</a> {{ $blog[0]->created_at->diffForHumans() }}</p>
      <p class="card-text">{{ $blog[0]->excerpt }}</p>
      <p class="card-text">
      </small>
      </p>

      <a href="/halaman-blog/{{ $blog[0]->slug }}"class="text-decoration-none btn btn-primary">Read More</a>

    </div>
  </div>
  <div class="d-flex justify-content-end">
  {{ $blog->links() }}
  </div>
    <div class="container">
        <div class="row">
            @foreach ($blog->skip(1) as $blogspot )
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                  <a href="/blog?category={{ $blogspot->category->slug }}">
                    <div class="position-absolute  text-white px-2 py-1" style="background-color: rgba(0, 0, 0, 0.5)">
                        {{ $blogspot->category->name }}
                    </div>
                  </a>
                  <a href="/halaman-blog/{{ $blogspot->slug }}"class ="text-decoration-none text-black">
                    {{-- validasi apakah user upload gambar atau engga --}}
                    @if ($blogspot->image)
                    <div style="max-height:400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $blogspot->image) }}" class="card-img-top" alt="...">
                    </div>
                    @else
                    <img src="https:source.unsplash.com/500x400?{{ $blogspot->category->name }}" class="card-img-top" alt="...">
                    @endif            
                    <div class="card-body">
                      <h5 class="card-title">{{ $blogspot->title }}</h5>
                    </a>                        
                      <small class="text-muted">
                        <p>By. <a href="/blog?user={{ $blogspot->user->username }}"class="text-decoration-none">{{ $blogspot->user->name }}</a> {{ $blogspot->created_at->diffForHumans() }}</p>
                        </small>

                      <p class="card-text">{{ $blogspot->excerpt }} </p>
                      <a href="/halaman-blog/{{ $blogspot->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

@else
<p>No Post Yet</p>    
@endif

@endsection