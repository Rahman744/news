@extends('layout')

@section('title', 'Create News')

@section('main_content')
    <div class="container mt-4">
        <h2>Add news</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>

            <div class="mb-3">
                <input type="text" name="title" class="form-control" placeholder="Headline" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Main text</label>
                <textarea id="news_content" name="news_content" class="form-control" rows="5" required>{{ old('news_content') }}</textarea>
            </div>


            <div class="mb-3">
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Save news</button>
        </form>
    </div>
@endsection
