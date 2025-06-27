@extends('layout')

@section('title')
    Watch Now
@endsection

@section('main_content')

    <div class="container-xl">
        <div class="pt-5 pb-4">
            <h3>Watch Now<i class="bi bi-arrow-up-right text-success"></i></h3>
        </div>
        <div class="row pb-5">
            <div class="col-3">
                <img src="{{ asset ('images/n1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/n2.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/n3.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/n4.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
        </div>
        <hr style="border-top: 2px solid #198754; margin: 0;">
    </div>

@endsection
