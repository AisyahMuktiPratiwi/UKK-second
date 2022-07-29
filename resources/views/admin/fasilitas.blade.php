@extends('layouts.admin')
@section('content-header')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <h1 style="text-align:center;font-family: 'Quintessential', cursive;"><b>Fasilitas</b></h1>
    </div>
</div>

@endsection
@section('content')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <table id="myTable" class="table table-striped table-responsive-md">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Fasilitas</th>
                    <th>Keterangan</th>
                    <th>gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kolam Renang</td>
                    <td>luas, terdapat kursi santai</td>
                    <td><img src="{{asset('image/kolam.jpg')}}" alt="" width="100px"></td>

                    <td><a href="/editfasilitas" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kolam Renang</td>
                    <td>luas, terdapat kursi santai</td>
                    <td><img src="{{asset('image/kolam.jpg')}}" alt="" width="100px"></td>

                    <td><a href="/editfasilitas" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kolam Renang</td>
                    <td>luas, terdapat kursi santai</td>
                    <td><img src="{{asset('image/kolam.jpg')}}" alt="" width="100px"></td>

                    <td><a href="/editfasilitas" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>

            </tbody>

        </table>

        <a href="/tmbhfasilitas"><i class="fas fa-plus-circle fa-3x"
                style="float: right;margin-top:2rem;padding-right:2rem;color:darkviolet;"></i></a>
    </div>
</div>





@endsection
