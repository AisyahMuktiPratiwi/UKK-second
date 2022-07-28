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
        <div class="row" style="margin-top: 5rem;">
            <div class="col-md-6">
                <img src="{{asset('image/login.png')}}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <form action="" method=""
                    style="background-color: rgb(168, 142, 233);margin-top:7rem;width:70%;color:white;border-radius:25px;box-shadow: 5px 6px 12px;padding:25px">
                    <h1 style="font-family: 'Quintessential',cursive;padding-top:1rem ;color:white;text-align:center">
                        <b>LOGIN</b>
                    </h1>
                    <div class="mb-3">
                        <label for="" class="form-label"> Email :</label>
                        <input type="email" name="" id="" class="form-control"
                            style="background-color: rgb(168, 142, 233) ;" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">password:</label>
                        <input type="text" name="" id="" class="form-control"
                            style="background-color: rgb(168, 142, 233) ;" required>
                    </div>

                    <a href="/dashboard" type="submit" class="btn"
                        style=" background-color:rgb(150, 55, 214);color:white;margin-bottom:1rem">Login</a>
                    <br>
                    <p style="color:red">*isikan email dan password asal klik login menuju bagian UI backend </p>
                    <p><a href="/register" style="color: white;text-decoration:none">Belum Punya Akun ? Sign Up</a>
                    </p>
                </form>
            </div>



        </div>
    </div>

</body>

</html>


@endsection