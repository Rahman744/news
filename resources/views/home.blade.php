@extends('layout')

@section('title')
    Home
@endsection

@section('main_content')
    <div class="bg-light">
        <div class="container-xl">
            <div class="row py-5">
                <div class="col-6 pt-5 mt-4 pe-5">
                    <div class="pe-5">
                        <h3 class="fw-bold">Welcome to Blue Marble</h3>
                        <p>Inspired by the iconic "Blue Marble" photo of earth taken by the Apollo 17 crew, we share stories that explain this global moment, and seek to capture the complexity and resilience of the place we call home.</p>
                        <h6 class="fw-bold">3 MINUTE READ</h6>
                    </div>
                </div>
                <div class="col-6 ps-5">
                    <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="pt-5 pb-4">
            <a href="/latest" class="text-black" style="text-decoration: none"><h3>Latest Stories<i class="bi bi-arrow-right text-success"></i></h3></a>
        </div>
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
        <div class="py-2 text-end">
            <a href="{{ route('news.latest') }}" class="btn btn-outline-success">All news</a>
        </div>
        <hr style="border-top: 2px solid #198754; margin: 0;">
    </div>

    <div class="container-xl">
        <div class="pt-5 pb-4">
            <a href="/watch" class="text-black" style="text-decoration: none"><h3>Watch Now<i class="bi bi-arrow-up-right text-success"></i></h3></a>
        </div>
        <div class="row pb-5">
            <div class="col-3">
                <img src="{{ asset ('images/n1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">We resuced dozens from war in Sudan, now we're looking ahead</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/n2.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How do Americans really feel about climate change</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/n3.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">The fight to lower Malaysia's voting age</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/n4.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">EUROPE</div>
                <div class="fw-bold">How Sea Watch International rescue migrants in distress</div>
            </div>
        </div>
        <hr style="border-top: 2px solid #198754; margin: 0;">
    </div>
@endsection
