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
                <form action="" method=""
                    style="background-color: rgb(168, 142, 233);margin-top:7rem;width:80%;color:white;border-radius:25px;box-shadow: 5px 6px 12px;padding:25px">
                    <h1 style="font-family: 'Quintessential',cursive;padding-top:1rem ;color:white;text-align:center">
                        <b>Sign Up</b>
                    </h1>
                    <div class=" mb-3">
                        <label for="" class="form-label"><i class="fa fa-user"></i> Nama</label>
                        <input type="text" name="" id="" class="form-control" required
                            style="background-color: rgb(168, 142, 233) ;">
                    </div>
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
                    <div class="mb-3">
                        <label for="" class="form-label"> cek password :</label>
                        <input type="text" name="" id="" class="form-control"
                            style="background-color: rgb(168, 142, 233) ;" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">status</label>
                        <select class="form-control" name="" id=""
                            style="background-color: rgb(168, 142, 233) ;color:white">
                            <option>--pilih status--</option>
                            <option>User</option>
                            <option>Admin</option>
                            <option>Resepsionis</option>
                        </select>
                    </div>
                    <a href="/dashboard" type="submit" class="btn"
                        style="background-color:rgb(150, 55, 214);color:white;margin-bottom:1rem">regis</a>
                    <br>
                    <p style="color:red">*isikan asal klik login menuju bagian UI backend </p>
                    <p><a href="/login" style="color: white;text-decoration:none">Sudah Punya Akun ? Login</a>
                    </p>

                </form>

            </div>

            <div class="col-md-6">
                <img src="{{asset('image/signn.png')}}" alt="" width="100%">
            </div>

        </div>

    </div>
</body>

</html>



@endsection