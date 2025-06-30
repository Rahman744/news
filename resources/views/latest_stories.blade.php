@extends('layout')

@php
    use Illuminate\Support\Str;
@endphp

@section('title', 'Latest Stories')

@section('main_content')
    <div class="container mt-4">
        <h3 class="py-3">All news</h3>

        <div class="row">
            @foreach ($news as $item)
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <a href="{{ route('news.show', $item->id) }}" class="w-100 text-decoration-none text-dark">
                        <div class="shadow-sm rounded overflow-hidden h-100 d-flex flex-column">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid w-100" alt="News Image" style="height: 200px; object-fit: cover;">
                            @endif
                            <div class="p-3 bg-white flex-grow-1 d-flex flex-column justify-content-between">
                                <div>
                                    <p class="mb-1 text-muted fw-bold text-uppercase">{{ $item->country }}</p>
                                    <h5>{{ $item->title }}</h5>
                                </div>
                                <small class="text-muted">{{ $item->created_at->format('d.m.Y H:i') }}</small>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
