<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
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
                    <li><a class="dropdown-item" href="/">Home</a></li>
                    <li><a class="dropdown-item" href="/latest">Latest Stories</a></li>
                    <li><a class="dropdown-item" href="/watch">Watch Now</a></li>
                    <li><a class="dropdown-item" href="/create">Add_news</a></li>
                </ul>
            </div>

            <div class="mx-auto text-center">
                <img src="{{ asset('images/logo.png') }}" alt="bluemarble" class="img-fluid w-75">
            </div>
        </div>
    </nav>
</div>
<hr style="width: 100vw; border: none; border-top: 2px solid #198754; margin: 0;">

@if (session('message'))
    <div class="container mt-3">
        <div class="alert alert-{{ session('message_type', 'success') }} alert-dismissible fade show" role="alert" id="flash-message">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Закрыть"></button>
        </div>
    </div>
@endif


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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Скрыть уведомление через 4 секунды
    setTimeout(function() {
        let alert = document.getElementById('flash-message');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 300); // Удалить из DOM через 0.3 сек
        }
    }, 3000); // 4000 миллисекунд = 4 секунды
</script>


</body>

</html>
