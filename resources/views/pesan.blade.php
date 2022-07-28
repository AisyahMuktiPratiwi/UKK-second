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

    <div class="container">
        <div class="row mt-5">
            <h1
                style="color:rgb(155, 11, 119);font-family: 'Quintessential', cursive;text-align:center;margin-bottom:2rem">
                <b>Form Pemesanan</b>
            </h1>
            <form action="" method=""
                style="background-color: rgb(168, 142, 233);width:50%;color:white;border-radius:25px;margin:0 auto;box-shadow: 5px 6px 12px;">
                <div class="mt-5 mb-3">
                    <label for="" class="form-label"> Nama Pemesan :</label>
                    <input type="text" name="" id="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Email Pemesan :</label>
                    <input type="email" name="" id="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> No HP :</label>
                    <input type="text" name="" id="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Nama Tamu :</label>
                    <input type="text" name="" id="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tipe Kamar</label>
                    <select class="form-control" name="" id="">
                        <option>--pilih kamar--</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> Jumlah Kamar :</label>
                    <input type="text" name="" id="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Check In :</label>
                    <input type="date" class="from-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Check Out :</label>
                    <input type="date" class="from-control" required>
                </div>
                <a href="/" type="submit" class="btn"
                    style="background-color:rgb(150, 55, 214);color:white;margin-bottom:2rem">Pesan</a>
            </form>

        </div>
    </div>
</body>

</html>