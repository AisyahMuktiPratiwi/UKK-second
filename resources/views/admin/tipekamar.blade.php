@extends('layouts.admin')
@section('content-header')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <h1 style="text-align:center;font-family: 'Quintessential', cursive;"><b>Tipe Kamar</b></h1>
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
                    <th>Tipe Kamar</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Premium Queen</td>
                    <td>5</td>
                    <td><img src="{{asset('image/k1.jpg')}}" alt="" width="100px"></td>
                    <td><a href="/edittipekamar" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Premium Queen</td>
                    <td>5</td>
                    <td><img src="{{asset('image/k1.jpg')}}" alt="" width="100px"></td>
                    <td><a href="/edittipekamar" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Premium Queen</td>
                    <td>5</td>
                    <td><img src="{{asset('image/k1.jpg')}}" alt="" width="100px"></td>
                    <td><a href="/edittipekamar" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Premium Queen</td>
                    <td>5</td>
                    <td><img src="{{asset('image/k1.jpg')}}" alt="" width="100px"></td>
                    <td><a href="/edittipekamar" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Premium Queen</td>
                    <td>5</td>
                    <td><img src="{{asset('image/k1.jpg')}}" alt="" width="100px"></td>
                    <td><a href="/edittipekamar" style="color:darkviolet;"><i class="fas fa-edit"></i></a><a href=""
                            style="color:darkviolet;margin-left:10px"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>

            </tbody>

        </table>

        <a href="/tmbhtipekamar"> <i class="fas fa-plus-circle fa-3x"
                style="float: right;margin-top:2rem;padding-right:2rem;color:darkviolet;"></i></a>
    </div>
</div>






@endsection