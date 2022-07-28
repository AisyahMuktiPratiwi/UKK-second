<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{secure_asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Fredericka+the+Great&family=Quintessential&family=Syne+Tactile&display=swap"
        rel="stylesheet">
    <script src="{{ secure_asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>

    <style>
    .navbar {
        top: 0;
        position: fixed;
        width: 100%;
        z-index: 1;
        opacity: 0.9;
    }

    .navbar ul li a:hover {

        background: rgb(150, 55, 214);
        height: 100%;
    }
    </style>
</head>

<body style="background-color:rgb(219, 217, 251)">

    <!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(170, 149, 228);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('image/logo5.png') }}" alt="" width="50" height="48"
                    class="d-inline-block align-text-top">
                <span style="font-family: 'Fredericka the Great', cursive;color:white;font-size: 20px;"> <b>Hotel
                        Hebat</b></span></a>
            <div class=" collapse navbar-collapse d-flex" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"
                            style="color:white;font-size: 20px;">Beranda</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="/kamar" style="color:white;font-size: 20px;">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/fasilitas" style="color:white;font-size: 20px;"
                            tabindex="-1" aria-disabled="true">Fasilitas</a>
                    </li>

                    <li class="nav-item">
                        <a href="/login" type="button" class="btn"
                            style="background-color:rgb(127, 78, 241);color:white;border-radius:20px;width:100px; height:45px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" type="button" class="btn"
                            style="background-color:rgb(150, 55, 214);color:white;border-radius:20px;width:100px;height:45px;">Sign
                            Up</a>
                    </li>
                    <form class="d-flex">
                        <a href="/"><i class="fas fa-sign-out-alt fa-2x" style="color:white;margin-left:20px "></i></a>
                    </form>
                </ul>

            </div>
        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(170, 149, 228);">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('image/logo5.png') }}" width="50" height="48"><span
                    style="font-family: 'Fredericka the Great', cursive;color:white;font-size:35px;margin-left:4%"><b>Hotel
                        Hebat</b></span>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/" style="color:white;font-size: 20px;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kamar" style="color:white;font-size:20px;">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fasilitas" style="color:white;font-size:20px;">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" type="button" class="btn"
                            style="background-color:rgb(127, 78, 241);color:white;border-radius:20px;width:100px; height:45px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" type="button" class="btn"
                            style="background-color:rgb(150, 55, 214);color:white;border-radius:20px;width:100px; height:45px;">Sign
                            Up</a>
                    </li>
                    <form class="d-flex my-2 my-lg-0">
                        <a href="/"><i class="fas fa-sign-out-alt fa-2x" style="color:white;margin-left:20px "></i></a>
                    </form>

                </ul>
                <ul class="navbar-nav me-auto mt-2 mt-lg-0-">

                </ul>

            </div>
        </div>
    </nav>
    @yield('content')
    <div class="footer" style="background-color:rgb(170, 149, 228) ;margin-top:5rem">
        <div class="container" style="color:white;margin:0 auto;font-size:22px;padding-top:2rem">
            <div class="row">
                <div class="col-md-4">
                    <h2><b>Contact</b></h2>
                    <hr width="200px">
                    <p><i class='fa fa-envelope' style='color: white'></i> purphotel@gmail.com</p>
                    <p><i class='fas fa-phone' style='color: white'></i> purphotel</p>
                </div>
                <div class="col-md-4">
                    <h2><b>Sosial Media</b></h2>
                    <hr width="200px">
                    <p><i class='fab fa-instagram' style='color: white'></i> purphotel</i></p>
                    <p><i class='fab fa-youtube' style='color: white'></i> purphotel</i></p>
                </div>
                <div class="col-md-4">
                    <h2><b>Lokasi</b></h2>
                    <hr width="200px">
                    <p><i class='fa fa-map-marker' style='color: white'></i> Gunung Puri, Bogor</i></p>
                </div>
            </div>

        </div>
    </div>
    <footer style="color:white;background-color
:rgb(176, 158, 228);text-align:center"> Copyrig
        ht &copy; 2022 Purp


        Hotel,by Aisyah Mukti Pratiwi </footer>