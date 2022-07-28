@extends('layouts.admin')

@section('content-header')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box " style="background-color:darkviolet;color:white">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Jumlah Pesan Kamar</p>
                    </div>
                    <div class="icon" style="color:white">
                        <i class="fas fa-file"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:darkviolet;color:white">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Jumlah Pengguna</p>
                    </div>
                    <div class="icon" style="color:white">
                        <i class=" fas fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:darkviolet;color:white">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Kamar</p>
                    </div>
                    <div class="icon" style="color:white">
                        <i class="fas fa-bed"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box " style="background-color:darkviolet;color:white">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px"></h3>

                        <p>Fasilitas</p>
                    </div>
                    <div class="icon" style="color:white">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->

            <!-- ./col -->
        </div>
    </div>
</section>



@endsection

@section('content')
<div class="card"
    style="color:darkviolet;padding:75px;width:85%;margin:0 auto;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body" style="margin:0 auto">
        <h1 class="card-title" style="text-align:center;font-size:30px;font-family: 'Quintessential', cursive;">
            <b>Selamat Datang User, Di Dashboard Hotel Hebat</b>
        </h1>
        <br>
        <br>
        <h6 style="text-align:center;font-size:20px;font-family: 'Quintessential', cursive;">
            Silahkan lakukan aktivitas sesuai hak ases yang telah diberikan!
        </h6>


    </div>
</div>



@endsection