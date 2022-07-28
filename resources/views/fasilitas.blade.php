@extends('layouts.depan')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .gmbr:hover {
        background-color: blueviolet;
        opacity: 0.3;

    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 10rem;font-family: 'Quintessential', cursive; color:rgb(155, 11, 119);">
            <h1 style="text-align:center;"><b> FASILITAS</b></h1>

            <div style="border-bottom: 3px dashed;width:800px;margin:0 auto;margin-bottom:3rem"></div>
            <div class="col-md-4">
                <div class="card" style="width:85%;height:40%;background-color:rgb(219, 217, 251);position:relative;">
                    <img class="card-img-top" src="{{asset('image/kolam.jpg')}}" alt="" width="100%" height="100%">
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <div class="card-body" style="box-shadow: 0px 2px 3px;">
                        <h5 class="card-title">
                            <b>Kolam Renang</b>
                        </h5>
                        <a href="/detailfasilitas" class="btn"
                            style="color: rgb(155, 11, 119);border-color:rgb(155, 11, 119);">lihat
                            detail</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:85%;height:40%;background-color:rgb(219, 217, 251);position:relative;">
                    <img class="card-img-top" src="{{asset('image/resto.jpg')}}" alt="" width="100%" height="100%">
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <div class="card-body" style="box-shadow: 0px 2px 3px;">
                        <h5 class="card-title">
                            <b>Restoran</b>
                        </h5>
                        <a href="/detailfasilitas" class="btn"
                            style="color: rgb(155, 11, 119);border-color:rgb(155, 11, 119);">lihat
                            detail</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:85%;height:40%;background-color:rgb(219, 217, 251);position:relative;">
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <img class="card-img-top" src="{{asset('image/gym.jpg')}}" alt="" width="100%" height="100%">
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <div class="card-body" style="box-shadow: 0px 2px 3px;">
                        <h5 class="card-title">
                            <b>Ruang Gym</b>
                        </h5>
                        <a href="/detailfasilitas" class="btn"
                            style="color: rgb(155, 11, 119);border-color:rgb(155, 11, 119);">lihat
                            detail</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:85%;height:40%;background-color:rgb(219, 217, 251);position:relative;">
                    <img class="card-img-top" src="{{asset('image/meet.jpg')}}" alt="" width="100%" height="100%">
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <div class="card-body" style="box-shadow: 0px 2px 3px;">
                        <h5 class="card-title">
                            <b>Ruang Meeting</b>
                        </h5>
                        <a href="/detailfasilitas" class="btn"
                            style="color: rgb(155, 11, 119);border-color:rgb(155, 11, 119);">lihat
                            detail</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:85%;height:40%;background-color:rgb(219, 217, 251);position:relative;">
                    <img class="card-img-top" src="{{asset('image/mushola.jpg')}}" alt="" width="100%" height="100%">
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <div class="card-body" style="box-shadow: 0px 2px 3px;">
                        <h5 class="card-title">
                            <b>Mushola</b>
                        </h5>
                        <a href="/detailfasilitas" class="btn"
                            style="color: rgb(155, 11, 119);border-color:rgb(155, 11, 119);">lihat
                            detail</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:85%;height:40%;background-color:rgb(219, 217, 251);position:relative;">
                    <img class="card-img-top" src="{{asset('image/wifi.jpg')}}" alt="" width="100%" height="100%">
                    <div class="gmbr" style="position:absolute;top:0;width:100%;height:100%;">
                    </div>
                    <div class="card-body" style="box-shadow: 0px 2px 3px;">
                        <h5 class="card-title">
                            <b>Wifi</b>
                        </h5>
                        <a href="/detailfasilitas" class="btn"
                            style="color: rgb(155, 11, 119);border-color:rgb(155, 11, 119);">lihat
                            detail</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>


</html>


@endsection
