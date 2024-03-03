@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Buku</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">User</li>
        </ol>
        @extends('layouts.admin')

    @section('content')
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Buku</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <a href="/tambahbukubaru" class="btn btn-dark">+ Tambah buku baru</a>
            {{-- <button type="button" class="btn btn-dark">+ Tambah buku baru</button> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <!-- <th scope="col">Kategori</th> -->
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukus as $buku)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->deskripsi }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->jumlah }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        
                        <td> <form action="/tambahbuku/{{ $buku->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-trash-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                    </svg></button>
                            </form>
                        </td>
                    </tr>

@endforeach
                </tbody>
            </table>
        @endsection

    </div>


@endsection
