<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/icons/bootstrap-icons.min.css') }}">
</head>

<body>

    <div class="container-xl">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <div class="dropdown">
                    <button class="text-success fw-bold h4" style="background: transparent; border: none;" data-bs-toggle="dropdown" aria-expanded="false">
                        ☰
                    </button>
                    <span class="fw-bolder h5">MENU</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#latest_stories">Latest Stories</a></li>
                        <li><a class="dropdown-item" href="#watch_now">Watch Now</a></li>
                    </ul>
                </div>

                <div class="mx-auto text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="bluemarble" class="img-fluid w-75">
                </div>
            </div>
        </nav>
    </div>
    <hr style="width: 100vw; border: none; border-top: 2px solid #198754; margin: 0;">
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
            <h3>Latest Stories <i class="bi bi-arrow-right text-success"></i></h3>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-4">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
            <div class="col-4">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AMERICAS</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
                <div class="small fw-bolder text-secondary pt-1">5 MINUTE READ</div>
            </div>
        </div>
        <hr style="border-top: 2px solid #198754; margin: 0;">
    </div>


    <div class="container-xl">
        <div class="pt-5 pb-4">
            <h3>Latest Stories <i class="bi bi-arrow-up-right text-success"></i></h3>
        </div>
        <div class="row pb-5">
            <div class="col-3">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
            <div class="col-3">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                <div class="text-secontary h6 fw-normal pt-2">AFRICA</div>
                <div class="fw-bold">How much US land do China and other countries really own?</div>
            </div>
        </div>
        <hr style="border-top: 2px solid #198754; margin: 0;">
    </div>

    <div class="container-xl py-3">
        <div style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center; height: 350px;">
            <div class="text-white p-5">
                <h6>EVERY WEEKDAY</h6>
                <div class="py-3 display-5 fw-semibold">
                    The Overview: A newsletter for our curious world
                </div>
                <form method="POST" action="#" class="d-flex ">
                    <div class="input-group w-auto">
                        <input type="email" class="form-control rounded-start" placeholder="Email" required>
                        <button class="btn btn-success rounded-end" type="submit">Subscribe</button>
                    </div>
                    <span class="p-2 mx-5 bg-black fw-bolder"><a href="#" class="text-white mx-5 ps-5 pe-5" style="text-decoration: none;">VIEW PAST NEWSLETTERS</a></span>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-black">
        <div class="container-xl text-center py-4">
            <div class="d-flex justify-content-center align-items-center gap-3 pb-3">
                <div class="text-white border border-success rounded-circle" style="width: 40px; height: 40px; font-size: 25px;">
                    <a href="https://www.instagram.com/" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="text-white border border-success rounded-circle" style="width: 40px; height: 40px; font-size: 25px;">
                    <a href="https://www.youtube.com/" class="text-white"><i class="bi bi-youtube"></i></a>
                </div>
                <div class="text-white border border-success rounded-circle" style="width: 40px; height: 40px; font-size: 25px;">
                    <a href="https://www.tiktok.com/en/" class="text-white"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <hr style="border-top: 2px solid #198754; margin: 0;">
            <div class="d-flex justify-content-center align-items-center gap-5 fw-semibold py-3">
                <a href="" class="text-white" style="text-decoration: none;">ABOUT US</a>
                <a href="" class="text-white" style="text-decoration: none;">CONTACT US</a>
                <a href="" class="text-white" style="text-decoration: none;">DONATE</a>
                <a href="" class="text-white" style="text-decoration: none;">PRIVACY POLICY</a>
                <a href="" class="text-white" style="text-decoration: none;">TERMS & CONDITIONS</a>
            </div>
            <hr style="border-top: 2px solid #198754; margin: 0;">
            <div class="text-white fw-semibold py-3" style="font-size: 13px;">
                Blue Marble is a project of the Chicago Council on Global Affairs <br> Chicago Council on Global Affairs2024
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>