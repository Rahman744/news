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
                <div class="dropdown ps-5">
                    <button class="btn btn-outline-success" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        &#9776;
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#latest_stories">Latest Stories</a></li>
                        <li><a class="dropdown-item" href="#watch_now">Watch Now</a></li>
                    </ul>
                </div>

                <div class="mx-auto text-center logo pe-5">
                    <img src="{{ asset('images/logo.png') }}" alt="bluemarble" class="img-fluid w-75">
                </div>
            </div>
        </nav>
    </div>
    <hr style="width: 100vw; border: none; border-top: 2px solid #198754; margin: 0;">
    <div class="bg-light">
        <div class="container-xl">
            <div class="row p-5">
                <div class="col-6 pt-5 mt-4 ps-4 pe-5">
                    <div class="pe-5">
                        <h3 class="fw-bold">Welcome to Blue Marble</h3>
                        <p>Inspired by the iconic "Blue Marble" photo of earth taken by the Apollo 17 crew, we share stories that explain this global moment, and seek to capture the complexity and resilience of the place we call home.</p>
                        <h6>3 MINUTE READ</h6>
                    </div>
                </div>
                <div class="col-6 ps-5">
                    <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl">
        <div class="py-5 ps-5">
            <h3>Latest Stories <i class="bi bi-arrow-right text-success"></i></h3>
        </div>
        <div><button class="btn btn-dark">Sign up</button></div>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset ('images/img1.png') }}" class="img-fluid w-100" alt="">
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
