@extends('layouts.admin')
@section('content-header')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <h1 style="text-align:center;font-family: 'Quintessential', cursive;"><b>Pengguna</b></h1>
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
                    <th>Nama </th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Meimei</td>
                    <td>memei@gmail.com</td>
                    <td>pelanggan</td>

                    <td><a href="" style="color:darkviolet;"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>mail</td>
                    <td>mail@gmail.com</td>
                    <td>admin</td>
                    <td><a href="" style="color:darkviolet;"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>susanti</td>
                    <td>susanti@gmail.com</td>
                    <td>pelanggan</td>
                    <td><a href="" style="color:darkviolet;"><i class=" fas fa-trash-alt"></i></a></td>
                </tr>

            </tbody>

        </table>

        <i class="fas fa-plus-circle fa-3x" style="float: right;margin-top:2rem;padding-right:2rem"></i>
    </div>
</div>



@endsection
