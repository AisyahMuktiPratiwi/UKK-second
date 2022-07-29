@extends('layouts.depan')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <img src="{{asset('image/kolam.jpg')}}" alt="" style="margin-top:10rem;width:100%">
            <div class="col-md-6">
                <div class="carousel-caption"
                    style=" z-index: 1;
        opacity: 0.9;background-color:rgb(170, 149, 280);position:relative;width:80%;box-shadow:rgb(210, 209, 250) 2px 15px 12px;color:rgb(155, 11, 119);text-align:justify;padding-left:30px;padding-right:30px">
                    <h1 style="font-family: 'Quintessential', cursive;">Nama Fasilitas</h1>

                    <br>
                    deskripsi fasilitas,deskripsi fasilitas,deskripsi

                    <br>desilitas,deskripsi fasilitas,deskripsi fasilitas,,


                    </p>

                </div>
            </div>

        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('image/jpg.jpg')}}" alt="" style="margin-top:10rem;width:100%;position:relative;">
            </div>
            <div class="col-md-6">
                <div class="carousel-caption"
                    style="background-color:rgb(212, 217, 251);position:absolute;width: 40%; height:50%;box-shadow:rgb(210, 209, 250) 2px 15px 12px;color:rgb(155, 11, 119);text-align:justify;padding-left:50px;padding-right:50px;margin-bottom:5rem;margin-left:28rem">
                    <h1 style="font-family: 'Quintessential', cursive;">Kolam Renang</h1>
                    <h6>area indor/ outdor</h6>
                    <br>
                    deskripsi fasilitas, deskripsi fasilitas, deskripsi fasilitas, deskripsi fasilitas, deskripsi
                    fasilitas
                    <br> deskripsi fasilitas
                </div>
            </div>


        </div>
    </div> -->


</body>


</html>




@endsection