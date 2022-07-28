@extends('layouts.admin')
@section('content-header')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <h1 style="text-align:center;font-family: 'Quintessential', cursive;"><b>Tambah Fasilita Hotel</b></h1>
    </div>
</div>

@endsection
@section('content')
<div class="card" style="color:darkviolet;box-shadow: rgb(219, 217, 251) 5px 6px 12px;">
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Nama Fasilitas</label>
                <input class="form-control" id="" type="text" aria-label="" required>
            </div>
            <div class="mb-3">
                <label for="fasilkmr" class="form-label">Keterangan</label>
                <input id="keterangan" type="hidden" name="keterangan">
                <trix-editor input="keterangan"></trix-editor>
            </div>

            <button type="submit" style="background-color:darkviolet;color:white;margin-top:2rem;">Simpan</button>

        </form>
    </div>
</div>


@endsection
