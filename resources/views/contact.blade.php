@extends('layouts.navbar')
@section('content')

<div class="image-grid">
    @for ($i = 1; $i <= 50; $i++) <img src="https://avatars.githubusercontent.com/u/110383694?s=400&u=a8ea7df469099d3d9844bc30af0f56dd1e004b9a&v=4" alt="Image {{ $i }}">
        @endfor
</div>

<style>
    .image-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 10px;
    }

    .image-grid img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
</style>

@endsection