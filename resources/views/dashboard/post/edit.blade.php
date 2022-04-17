@extends('dashboard.layouts.main')

@section('container')
<div class="page-head">
    <h4 class="my-2">Editing Post</h4>
</div>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">        
                <div class="general-label">
                    <form method="post"action="/dashboard/mypost/{{ $post->slug }}"enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid                            
                            @enderror" id="title"name="title" placeholder="Enter Title"value="{{ old('title',$post->title) }}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                            
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid                            
                            @enderror" id="slug"name="slug" value="{{ old('slug',$post->slug) }}">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                            
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control"id="category"name="category_id">
                                @foreach ($categories as $category)
                                @if(old('category_id',$post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected >{{ $category->name }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <div class="card-body">
                                <h5 class="header-title">Wanna Change Your Article Image? </h5>
                                <label for="input-file-now">You Can Ignore This If You Dont Want Change Article Image</label>
                                <input type="hidden"name="oldImage"value="{{ $post->image }}">
                                @error('image')
                                <p class="text-danger">{{ $message }}</p>                            
                                @enderror                  
                                <input type="file" id="input-file-now"name="image" class="dropify"data-default-file="{{ asset('storage/'. $post->image) }}" />                                   
                            </div>
                        </div>
                        <div class="form-group">    
                            <label for="body">Write Your Article</label>   
                            @error('body')
                                <p class="text-danger">{{ $message }}</p>                            
                            @enderror                   
                            <input type="text" id="elm1" name="body"value="{{ old('body',$post->body) }}"> 
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </form>                                    
                </div>                            
            </div>
        </div>
    </div>
    </div><!--end row-->
                                
{{-- auto isi slug --}}
<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("change", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });
</script>
@endsection
{{-- plugin buat textarea body --}}
