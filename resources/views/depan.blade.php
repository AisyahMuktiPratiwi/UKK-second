@extends('layouts.depan')
@section('content')



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" style=" top: 70px;width:100%;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">

                <img src="{{ asset('image/hotel.jpg') }}" class="d-block w-100" alt="First slide">
                <div class="carousel-caption">

                    <!-- <h1
                        style="text-align:center;color:rgb(209, 64, 149);font-family: 'Bungee Shade', cursive;margin-left: 10%">
                        <b>
                            <marquee direction="down" behavior="slide" scrollamount="12" height="200px">
                                <br>
                                <br>
                                WELCOME TO
                            </marquee>
                            <span style="margin-left: 40%">
                                <marquee direction="up" behavior="slide" scrollamount="6" height="100px">
                                    PURPTEL
                                </marquee>
                            </span>
                        </b>
                    </h1> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/resto.jpg') }}" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption">
                    <!-- <h1
                        style="margin-bottom:20%;color:rgb(232, 174, 250);font-size:50px;font-family: 'Bungee Shade', cursive;">
                        <b>HOTEL SERBA UNGU & MEWAH</b>
                    </h1> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/meet.jpg') }}" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption">
                    <!-- <h1
                        style="margin-bottom:50%;color:rgb(176, 92, 233);font-size:50px;font-family: 'Bungee Shade', cursive;">
                        <b>TERDAPAT BERBAGAI MACAM FASILITAS </b>
                    </h1> -->
                </div>
            </div>
        </div>
    </div>


    <form action="" class="row"
        style="width:70%;background-color:rgb(148, 121, 219);top: 50%;position:relative;opacity: 0.9;margin: 0 auto;box-shadow: 0px 3px 8px;">
        <div class="col-md">
            <div class="input-grup">
                <div class="input-grup-prepend">
                    <span class="input-group-text border-0"
                        style="background-color:rgb(148, 121, 219);color:white;">Check In</span>
                </div>
                <input type="date" class="from-control-rounded" placeholder="Check In"
                    style="background-color:rgb(148, 121, 219);border-color:white">
            </div>
        </div>
        <div class="col-md">
            <div class="input-grup">
                <div class="input-grup-prepend">
                    <span class="input-group-text border-0"
                        style="background-color:rgb(148, 121, 219);color:white;">Check Out</span>
                </div>
                <input type="date" class="from-control-rounded" placeholder="Check Out"
                    style="background-color:rgb(148, 121, 219);border-color:white">
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-grup">
                <div class="input-grup-prepend">
                    <span class="input-group-text border-0" style="background-color:rgb(148, 121, 219);color:white;">
                        Jumlah Kamar</span>
                    <span><input type="text" class="from-control-rounded" maxlength="3"
                            style="background-color:rgb(148, 121, 219);border-color:white"></span>
                </div>

            </div>
        </div>
    </form>

    <a href="/pesan" type="submit" class="btn"
        style="background-color:blueviolet;color:white;margin-left:75%;position:relative; opacity:0.4;box-shadow: 0px 8px 12px;">Pesan</a>
    <div class="content">
        <div class="container-fluid">

            <div class="card mb-3"
                style="height:25rem;margin-top:3rem;max-width: 100%;border:none;background-color:rgb(215, 200, 255);color:rgb(155, 11, 119);text-align:center">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <marquee direction="right" behavior="alternate" scrollamount="3" width="150px">
                                <h1 class="card-title"
                                    style="font-family: 'Quintessential', cursive; font-size:50px;margin-top:2rem;">
                                    <b>About
                                    </b>
                                </h1>
                            </marquee>
                            <div style="border-bottom: 3px dashed;width:200px;margin:0 auto;"></div>
                            <br>

                            <p class="card-text">Hotel Hebat
                                adalah Hotel dengan
                                layanan pilihan dengan desain yang menarik dengan tema serba ungu,dilengkapi
                                berbagai
                                fasilitas yang
                                akan membuat liburan anda menjadi lebih menyenangkan dengan harga terjangkau
                                </h5>

                            </p>
                            <p class="card-text"><small class="text-muted"><i class='fa fa-star'
                                        style="color:blueviolet"></i><i class='fa fa-star'
                                        style="color:blueviolet"></i><i class='fa fa-star'
                                        style="color:blueviolet"></i><i class='fa fa-star'
                                        style="color:blueviolet"></i><i class='fa fa-star'
                                        style="color:blueviolet"></i></small></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('image/ilustrasi.png')}} " width="100%" class="img-fluid rounded-start"
                            alt="...">
                    </div>

                </div>
            </div>


            <div class="card mb-3"
                style="background-color:rgb(219, 217, 251);border:none;margin-top: 12rem;font-family: 'Quintessential', cursive;color:rgb(155, 11, 119);">
                <div class="row g-0" style="padding-left:10% ;">

                    <h1 style="text-align:center"><b>APA YANG UNIK DARI HOTEL HEBAT ?</b></h1>

                    <div
                        style="border-bottom: 3px dashed;width:800px;margin:0 auto;color:rgb(155, 11, 119);margin-bottom:3rem; ">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('image/unik1.png') }}" alt="" width="200px">
                        <h4 style="margin-left: 3rem;"><b>Serba Ungu</b></h4>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('image/unik2.png') }}" alt="" width="200px">
                        <h4><b>Voice Command Recognition</b></h4>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('image/unik3.png') }}" alt="" width="200px">
                        <h4><b>Robot Pengantar Makanan</b></h4>
                    </div>
                </div>
            </div>



        </div>
    </div>




</body>

</html>










@endsection