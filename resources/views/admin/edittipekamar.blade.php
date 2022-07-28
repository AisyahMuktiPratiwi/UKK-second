@extends('layouts.admin')
@section('content-header')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <h1 style="text-align:center;font-family: 'Quintessential', cursive;"><b>Edit Tipe Kamar</b></h1>
    </div>
</div>

@endsection
@section('content')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Tipe Kamar</label>
                        <input class="form-control" id="" type="text" aria-label="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gambar Kamar</label>
                        <br>
                        <img src="{{ asset('image/k1.jpg')}}" alt="" style="width:70px;margin-bottom:5px">

                        <input class="form-control" id="" type="file" aria-label="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Kamar</label>
                        <input class="form-control" id="" type="text" aria-label="" required>
                    </div>

                    <button type="submit"
                        style="background-color:darkviolet;color:white;margin-top:5rem;">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
