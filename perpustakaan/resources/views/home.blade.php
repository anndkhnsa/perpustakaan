@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Peminjaman</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating" style="display: flex">
                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                    <label for="floatingInputGrid">Kode Peminjaman</label>
                    <div style="margin-left: 5px; margin-top: 10px">
                        <button type="button" class="btn btn-dark">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating" style="display: flex; margin-left: 20px">
                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                    <label for="floatingInputGrid">Kode Pengembalian</label>
                    <div style="margin-left: 5px; margin-top: 10px">
                        <button type="button" class="btn btn-dark">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 20px">
            <a href="/laporan" class="btn btn-success">Generate Laporan</a>
            {{-- <button type="button" class="btn btn-success">Generate Laporan</button> --}}

            {{-- <div style="margin-top: 20px">
                <button type="button" class="btn btn-dark">+ Tambah Kategori Buku</button> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Kode Peminjaman</th>
                        <th scope="col">Tgl Peminjaman</th>
                        <th scope="col">Tgl Kembali</th>
                        <th scope="col">Dikembalikan</th>
                        <th scope="col">Status</th>
                        <th scope="col">action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td> <a href="/detailpeminjaman" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                </svg></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><button type="button" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                </svg></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><button type="button" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                </svg></button>
                        </td>
                    </tr>
        </div>
        </tbody>
        </table>
    @endsection
