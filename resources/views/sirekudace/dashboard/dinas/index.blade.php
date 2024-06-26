@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">OPD Sumatera Utara</h1>
        <p class="mb-4">Berikut adalah nama OPD menjalankan berbagai kegiatan pemerintahan dan pelayanan publik di wilayah Provinsi Sumatera Utara.</p>

        @if (auth()->user()->role == 'superadmin')
        <a href="{{ route('dinas.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-2"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Dinas</a>
            @endif
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
                                @if (auth()->user()->role == 'superadmin')
                                    <th scope="col" class="text-center">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listDinas as $dinas)
                            <tr>
                                <td>{{ $dinas->kode_dinas }}.</td>
                                <td>{{ $dinas->nama_dinas }}</td>
                                @if (auth()->user()->role == 'superadmin')
                                        <td class="text-center">
                                            <div class="d-flex">
                                                <a href="{{ route('dinas.edit', $dinas->id) }}"
                                                    class="btn btn-warning btn-sm mr-2">Edit</a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?')"
                                                    action="{{ route('dinas.destroy', $dinas->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm rounded-1">Del</button>
                                                </form>
                                            </div>
                                        </td>
                                    @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection