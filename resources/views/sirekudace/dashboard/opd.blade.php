@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">OPD Sumatera Utara</h1>
        <p class="mb-4">Berikut adalah nama OPD menjalankan berbagai kegiatan pemerintahan dan pelayanan publik di wilayah Provinsi Sumatera Utara.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DAFTAR OPD PROVINSI SUMATERA UTARA</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-1">Nomor</th>
                                <th class="text-center">Nama Dinas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listDinas as $dinas)
                            <tr>
                                <td>{{ $dinas->kode_dinas }}.</td>
                                <td>{{ $dinas->nama_dinas }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection