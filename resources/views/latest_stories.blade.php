@extends('layout')

@section('title')
    Latest Stories
@endsection

@section('main_content')

    <div class="container-xl">
        <div class="pt-5 pb-4">
            <h3>Latest Stories <i class="bi bi-arrow-right text-success"></i></h3>
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
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/3.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-4">
                <img src="{{ asset ('images/4.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/5.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/6.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
        </div>
        <hr style="border-top: 2px solid #198754; margin: 0;">
    </div>

@endsection
