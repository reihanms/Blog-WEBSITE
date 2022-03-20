
@extends('layouts/main')

@section('isinya')

<style>

</style>

<h1 class="border-bottom mb-3">Post Categories</h1>
<h3 style="color: rgba(0, 0, 0, 0.623)"class="mb-3"> Daftar Kategori </h3>

<div class="container">
    <div class="row">
        @foreach ($categories as $category )
        <div class="col-md-4 mb-3">
            <a href="/blog?category={{ $category->slug }}">
            <div class="card bg-dark text-white"style="transition:.3s;">
                <img src="https:source.unsplash.com/700x600?{{ $category->slug }}" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4"style="background-color:rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
    {{-- @foreach ($categories as $category )
    <ul>
        <li style="list-style: none">
            <h2>
                <a  class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h2>
        </li>
    </ul>
    @endforeach --}}

@endsection