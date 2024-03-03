@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Buku Baru</h1>

        <div class="card">
            <div class="">

            </div>
            <div class="card-body">

                <form action="/tambahbuku" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="" aria-describedby="">
                </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="" aria-describedby="">
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Sampul</label>
                    <input type="text" name="sampul" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tahun</label>
                    <input type="text" name="tahun_terbit" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Simpan</button>
                </div>
                </form>
            </div>
                
            </div>
        </div>

    </div>
@endsection
