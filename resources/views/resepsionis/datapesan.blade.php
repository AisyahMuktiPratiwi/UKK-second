@extends('layouts.admin')
@section('content-header')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <h1 style="text-align:center;font-family: 'Quintessential', cursive;"><b>Pesan Kamar</b></h1>
    </div>
</div>

@endsection
@section('content')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>tiwi</td>
                    <td>uyty</td>
                    <td>jj</td>
                    <td>hjj</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>mia</td>
                    <td>uyty</td>
                    <td>hghgh</td>
                    <td>hjj</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>mama</td>
                    <td>uyty</td>
                    <td>hghgh</td>
                    <td>hjj</td>
                </tr>

            </tbody>

        </table>

        <i class="fas fa-plus-circle fa-3x" style="float: right;margin-top:2rem;padding-right:2rem"></i>
    </div>
</div>





@endsection
