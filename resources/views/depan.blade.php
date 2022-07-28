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
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" style=" top: 50px;width: 100%;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">

                <img src="{{ asset('image/hotel.jpg') }}" class="d-block w-100" alt="First slide">
                <div class="carousel-caption">
                    <h1
                        style="margin-bottom:33%;color:rgb(209, 64, 149);font-size:65px;font-family: 'Bungee Shade', cursive;margin-left: 10%">
                        <b>
                            <marquee direction="down" behavior="slide" scrollamount="12" height="200px">WELCOME TO
                            </marquee>
                            <span style="margin-left: 40%">
                                <marquee direction="up" behavior="slide" scrollamount="6" height="100px"> PURPTEL
                                </marquee>
                            </span>
                        </b>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/resto.jpg') }}" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption">
                    <h1
                        style="margin-bottom:20%;color:rgb(232, 174, 250);font-size:80px;font-family: 'Bungee Shade', cursive;">
                        <b>HOTEL SERBA UNGU & MEWAH</b>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/meet.jpg') }}" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption">
                    <h1
                        style="margin-bottom:50%;color:rgb(176, 92, 233);font-size:60px;font-family: 'Bungee Shade', cursive;">
                        <b>TERDAPAT BERBAGAI MACAM FASILITAS </b>
                    </h1>
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


    <div class="about"
        style="background-color:rgb(215, 200, 255);text-align: center; color:rgb(155, 11, 119); display: flex;height:20rem;margin-top:5rem">

        <div class="col-md-6">
            <marquee direction="right" behavior="alternate" scrollamount="3" width="150px" onmouseout="this.stop()">
                <h1 style="font-family: 'Quintessential', cursive; font-size:50px;margin-top:2rem;">
                    <b>About
                    </b>
                </h1>
            </marquee>
            <div style="border-bottom: 3px dashed;width:200px;margin:0 auto;"></div>
            <h5 style="padding-top: 1rem;padding-bottom:1rem;color:rgb(114, 11, 155);padding-left:4rem;">Hotel Hebat
                adalah Hotel dengan
                layanan pilihan dengan desain yang menarik dengan tema serba ungu,dilengkapi berbagai fasilitas yang
                akan membuat liburan anda menjadi lebih menyenangkan dengan harga terjangkau </h5>
            <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i
                class='fa fa-star'></i>
        </div>
        <div class="col-md-6">
            <img src="{{asset('image/ilustrasi.png')}} " width="100%">
        </div>

    </div>



    <div class="container" style="margin-top: 12rem;font-family: 'Quintessential', cursive;color:rgb(155, 11, 119);">
        <div class="row">
            <h1 style="text-align:center;"><b>APA YANG UNIK DARI HOTEL HEBAT ?</b></h1>
            <div
                style="border-bottom: 3px dashed;width:800px;margin:0 auto;color:rgb(155, 11, 119);margin-bottom:3rem ">
            </div>zzz
            <div class="col-md-4">
                <img src="{{ asset('image/unik1.png') }}" alt="" width="200px" style="margin-left:8rem">
                <h4 style="margin-left:10rem"><b>Serba Ungu</b></h4>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('image/unik2.png') }}" alt="" width="200px" style="margin-left:3rem">
                <h4><b>Voice Command Recognition</b></h4>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('image/unik3.png') }}" alt="" width="200px">
                <h4><b>Robot Pengantar Makanan</b></h4>
            </div>
        </div>
    </div>
</body>

</html>
@endsection