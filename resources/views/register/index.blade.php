@extends('layouts.main')

@section('isinya')

<div class="form-body without-side">
    <div class="row">
        <div class="img-holder"style="margin-top:-170px;">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="images/graphic3.svg" alt="">
            </div>
        </div>
        <div class="form-holder"style="margin-top:-90px;">
            <div class="form-content">
                <div class="form-items">
                    <h3>Registration Form</h3>
                    <p>Explore more the world Now!</p>
                    <form action="/register" method="POST">
                        {{-- csrf BERFUNGSI UNTUK MENGAMANKAN POST DARI WEBSITE LAIN --}}
                        @csrf

                        {{-- name --}}
                        <input class="form-control @error('name') is-invalid                            
                        @enderror" type="text" name="name"id="name" placeholder="Name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                        @enderror

                        {{-- username --}}
                        <input class="form-control @error('username') is-invalid                            
                        @enderror" type="text" name="username"id="username" placeholder="Username"required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                        @enderror

                        {{-- email --}}
                        <input class="form-control  @error('email') is-invalid                            
                        @enderror" type="email" name="email"id="email" placeholder="E-mail Address"required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                        @enderror

                        {{-- password --}}
                        <input class="form-control  @error('password') is-invalid                            
                        @enderror" type="password" name="password"id="password" placeholder="Password"required >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                        @enderror

                        {{-- button submit --}}
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Register</button>
                        </div>  
                    </form>
                    <div class="page-links mt-3">
                        Already have account? <a href="/login"> Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection