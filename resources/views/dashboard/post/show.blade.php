@extends('dashboard.layouts.main')

@section('container')
<div class="page-head">
    <h4 class="mt-2 mb-2">My Post</h4>
</div>

<div class="container">
    <a href="/dashboard/mypost"class="text-decoration-none btn btn-primary mb-2"><i class="mdi mdi-pencil-box-outline"></i> Back to My Post</a>
    <a href="/dashboard/mypost/{{ $post->slug }}/edit"class="text-decoration-none btn btn-warning mb-2"><i class="mdi mdi-pen"></i> Edit Post</a>
    <form action="/dashboard/mypost/{{ $post->slug }}"method="post"class="d-inline mb-2">
        @method('delete')
        @csrf
        <button class="btn mb-2" onclick="return confirm('Are You Sure?')"style="background-color:#DC3545;color:white;"><i class="mdi mdi-delete"></i>Delete Post</button></a>
        </form>
    <div class="row justify-content-left">
        <div class="col-lg-12">
            <div class="judul mb-4">
            <h2>{{ $post->title }}</h2>
            <small>
                {{ $post->created_at->diffForHumans() }}
            </small>
            </div>

            {{-- validasi apakah user upload gambar atau engga --}}
            @if ($post->image)
            <div style="max-height:350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
            </div>
            @else
            <img src="https:source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
            @endif
            <article class="my-3 fs-8">
            <p>{!! $post->body !!}  <!-- escape !--></p>
            </article>
            
            
        </div>
    </div>
</div>




@endsection


