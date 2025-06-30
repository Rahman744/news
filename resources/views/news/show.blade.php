@extends('layout')

@section('title', $news->title)

@section('main_content')
    <div class="container my-5">

        <h1 class="fw-bold">{{ $news->title }}</h1>

        <p class="text-muted text-uppercase fw-semibold mb-4">
            {{ $news->country }} | {{ $news->created_at->format('d.m.Y H:i') }}
        </p>

        @if($news->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $news->image) }}"
                     class="img-fluid"
                     style="max-width: 60%; height: auto; object-fit: cover;"
                     alt="News Image">
            </div>
        @endif

        <div style="font-size: 1.1rem; line-height: 1.7;">
            {!! nl2br(e($news->content)) !!}
        </div>
    </div>
@endsection
