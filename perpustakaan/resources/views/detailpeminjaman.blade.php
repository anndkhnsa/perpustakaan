@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Peminjaman</h1>
        

        <div class="card">
            <div class="">

            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Judul</label>
                    <input type="" class="form-control" id="" aria-describedby="">
                    <div id="" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sampul</label>
                    <input type="" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kategori</label>
                    <input type="" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Penulis</label>
                    <input type="" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Penerbit</label>
                    <input type="" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah</label>
                    <input type="" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tahun Terbit</label>
                    <input type="" class="form-control" id="">
                </div>
                <a href="" class="btn btn-dark">Submit</a>
            </div>
        </div>
        {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    </div>
@endsection