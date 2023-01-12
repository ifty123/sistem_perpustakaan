@extends('template.layout.master')

@section('title', 'Detail Buku')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Buku</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Buku</h6>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Buku</th>
                                <th>Nama Buku</th>
                                <th>Penerbit</th>
                                <th>Penulis</th>
                                <th>Tahun Terbit</th>
                                <th>Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $item)
                            <tr>
                                <td>{{ $item->kode_buku }}</td>
                                <td>{{ $item->judul_buku }}</td>
                                <td>{{ $item->penerbit_buku }}</td>
                                <td>{{ $item->penulis_buku }}</td>
                                <td>{{ $item->tahun_terbit_buku }}</td>
                                <td>{{ $item->kategori_buku }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
