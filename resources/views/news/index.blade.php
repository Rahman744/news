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
            <div class="col-4">
                <img src="{{ asset ('images/1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/2.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">CONFLICTS&CRIES</div>
                <div class="fw-bold">What is Jordan's role in the Middle East and how could the Israel-Hamas war affect the country?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/3.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">Is the UN doing a good job? Just 33% of Americans think so, new Gallup poll shows</div>
                <div class="small fw-bolder text-secondary pt-1">6 MINUTE READ</div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-4">
                <img src="{{ asset ('images/4.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">CONFLICTS&CRIES</div>
                <div class="fw-bold">Why is Sweden telling its citizens to prepare for war?</div>
                <div class="small fw-bolder text-secondary pt-1">4 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/5.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">1 in 5 young people around the world are NEETs. What are NEETs?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/6.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">EUROPE</div>
                <div class="fw-bold">Multiple countries have tested a universal basic income - and it works?</div>
                <div class="small fw-bolder text-secondary pt-1">3 MINUTE READ</div>
            </div>
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
