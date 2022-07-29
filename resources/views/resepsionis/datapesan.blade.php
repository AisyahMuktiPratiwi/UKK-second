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
        <table id="myTable" class="table table-striped table-responsive-md">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Check In</th>
                    <th>Check Out</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Meimei</td>
                    <td>15-07-22</td>
                    <td>18-07-22</td>

                </tr>

                <tr>
                    <td>2</td>
                    <td>Susanti</td>
                    <td>7-04-22</td>
                    <td>10-04-22</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Ijat</td>
                    <td>2-3-22</td>
                    <td>9-3-22</td>

                </tr>
            </tbody>

        </table>

        <i class="fas fa-plus-circle fa-3x" style="float: right;margin-top:2rem;padding-right:2rem"></i>
    </div>
</div>





@endsection
