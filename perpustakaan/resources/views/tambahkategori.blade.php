@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Kategori</h1>
        

        <div class="card">
            <div class="">

            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
