<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/icons/bootstrap-icons.min.css') }}">
</head>

<body>
    <div class="container-xl pe-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid pe-5">
                <div class="dropdown">
                    <button class="text-success fw-bold h4" style="background: transparent; border: none;" data-bs-toggle="dropdown" aria-expanded="false">
                        ☰
                    </button>
                    <span class="fw-bolder h5">MENU</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">Home</a></li>
                        <li><a class="dropdown-item" href="/latest">Latest Stories</a></li>
                        <li><a class="dropdown-item" href="/watch">Watch Now</a></li>

                        @auth
                        @if(auth()->user()->is_admin)
                        <li><a class="dropdown-item" href="/create">Add News</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endif
                        <li class="dropdown-item text-success">Hello, {{ Auth::user()->name }}</li>
                        <li>
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">Logout</button>
                            </form>
                        </li>
                        @endauth

                        @guest
                        <li><a class="dropdown-item" href="/login">Login</a></li>
                        <li><a class="dropdown-item" href="/register">Register</a></li>
                        @endguest
                    </ul>

                </div>

                <div class="mx-auto text-center pe-5">
                    <img src="{{ asset('images/logo.png') }}" alt="bluemarble" class="img-fluid w-75">
                </div>
            </div>
        </nav>
    </div>
    <hr style="width: 100vw; border: none; border-top: 2px solid #198754; margin: 0;">

    @if (session('message'))
    <div class="container mt-3" id="flash-container">
        <div class="alert alert-{{ session('message_type', 'success') }} alert-dismissible fade show" role="alert" id="flash-message">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Закрыть"></button>
        </div>
    </div>
    @endif


    @if (!request()->is('login') && !request()->is('register'))
    <div>
        @yield('main_content')
    </div>

    <div class="container-xl py-3">
        <div style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center; height: 350px;">
            <div class="text-white p-5">
                <h6 class="fw-bold">EVERY WEEKDAY</h6>
                <div class="py-3 display-4 fw-semibold">
                    The Overview: A newsletter for our curious world
                </div>
                <form method="post" action="/check" class="d-flex">
                    @csrf
                    <div class="input-group w-auto">
                        <input type="email" name="email" id="email" class="form-control rounded-start" placeholder="Email">
                        <button class="btn btn-success rounded-end" type="submit">Subscribe</button>
                    </div>
                    <span class="p-2 mx-5 bg-black fw-bolder"><a href="https://turkmenportal.com/tm/blog/tazelikler" class="text-white mx-5 ps-5 pe-5" style="text-decoration: none;">VIEW PAST NEWSLETTERS</a></span>
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
                <a href="#" class="text-white" style="text-decoration: none;">ABOUT US</a>
                <a href="#" class="text-white" style="text-decoration: none;">CONTACT US</a>
                <a href="#" class="text-white" style="text-decoration: none;">DONATE</a>
                <a href="#" class="text-white" style="text-decoration: none;">PRIVACY POLICY</a>
                <a href="#" class="text-white" style="text-decoration: none;">TERMS & CONDITIONS</a>
            </div>
            <hr style="border-top: 2px solid #198754; margin: 0;">
            <div class="text-white fw-semibold py-3" style="font-size: 13px;">
                Blue Marble is a project of the Chicago Council on Global Affairs <br> Chicago Council on Global Affairs2024
            </div>
        </div>
    </div>

    @else
    {{-- Если login или register --}}
    <div class="container mt-5">
        @yield('main_content')
    </div>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        setTimeout(function() {
            let alert = document.getElementById('flash-message');
            let container = document.getElementById('flash-container');

            if (alert && container) {
                alert.classList.remove('show');
                alert.classList.add('fade');

                setTimeout(() => {
                    container.remove(); // удаляем контейнер с отступом
                }, 300); // подождать завершения fade
            }
        }, 3000);
    </script>


</body>

</html>