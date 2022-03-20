@extends('layouts/main')

@section('isinya')
    <h1>Ini Halaman About</h1>
    <h1>{{ $name }}</h1>
    <h3>{{ $email }}</h1>
    <img src="img/{{ $gambar }}"width="200"alt = "{{ $name }}"class="img-thumbnail rounded-circle">
@endsection