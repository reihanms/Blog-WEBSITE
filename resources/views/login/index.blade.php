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
        <div class="form-holder"style="margin-top:-70px;">
            <div class="form-content">
                <div class="form-items">
                    <h3>Login to account</h3>
                    <p>Explore more the world Now!</p>
                    <form action="/login" method="POST">
                        @csrf

                        {{-- input username --}}
                        <input class="form-control @error('username') is-invalid                            
                        @enderror" type="text" name="username" placeholder="Username" required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                        @enderror

                        {{-- input password --}}
                        <input class="form-control @error('password') is-invalid                            
                        @enderror" type="password" name="password" placeholder="Password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                        @enderror

                        {{-- button submit --}}
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Login</button>
                        </div>
                    </form>
                    <div class="page-links mt-3">
                        <a href="/register">Register new account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection