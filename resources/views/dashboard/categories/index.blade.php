@extends('dashboard.layouts.main')

@section('container')
<div class="page-head">
    <h4 class="mt-2 mb-2">My Category</h4>
</div>
<a href="/dashboard/categories/create"><button class="btn btn-primary"><i class="mdi mdi-plus"></i> Add New Category</button></a>
<div class="table-responsive">
    <table class="table table-hover m-b-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> {{ $category->name }}</td>
                <td>
                    <form action="/dashboard/categories/{{ $category->slug }}"method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn" onclick="return confirm('Are You Sure?')"style="background-color:#DC3545;color:white;"><i class="mdi mdi-delete"></i></button></a>
                    </form>

                    <a href="/dashboard/categories/{{ $category->slug }}/edit"><button class="btn btn-primary"><i class="mdi mdi-pen"></i></button></a>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
</div>

@endsection


