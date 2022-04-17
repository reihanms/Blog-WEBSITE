@extends('dashboard.layouts.main')

@section('container')
<div class="page-head">
    <h4 class="mt-2 mb-2">My Post</h4>
</div>
<a href="/dashboard/mypost/create"><button class="btn btn-primary"><i class="mdi mdi-plus"></i> Add New Posts</button></a>
<div class="table-responsive">
    <table class="table table-hover m-b-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> {{ $post->title }}</td>
                <td> {{ $post->category->name }}</td>
                <td>
                    <form action="/dashboard/mypost/{{ $post->slug }}"method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn" onclick="return confirm('Are You Sure?')"style="background-color:#DC3545;color:white;"><i class="mdi mdi-delete"></i></button></a>
                    </form>

                    <a href="/dashboard/mypost/{{ $post->slug }}/edit"><button class="btn btn-primary"><i class="mdi mdi-pen"></i></button></a>
                    <a href="/dashboard/mypost/{{ $post->slug }}"><button class="btn btn-success"><i class="mdi mdi-eye"></i></button></a>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
</div>

@endsection


