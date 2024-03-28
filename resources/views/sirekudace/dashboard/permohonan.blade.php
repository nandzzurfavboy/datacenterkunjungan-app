@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Permohonan</h1>
        <p class="mb-4">Berikut adalah Permohonan Reservasi Kunjungan Data Center Dinas Komunikasi dan Informatika Provinsi
            Sumatera Utara</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DAFTAR PERMOHONAN</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Penanggung Jawab</th>
                                <th scope="col">Instansi</th>
                                <th scope="col">Tanggal Kunjungan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Dokumen Pendukung</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($permohonanAdmin as $permohonanPengunjung)
                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $permohonanPengunjung->nip }}</td>
                                    <td>{{ $permohonanPengunjung->name }}</td>
                                    <td>{{ $permohonanPengunjung->dinas->nama_dinas }}</td>
                                    <td>{{ $permohonanPengunjung->date }}</td>
                                    <td>{{ $permohonanPengunjung->subject }}</td>
                                    <td>
                                        @if ($permohonanPengunjung->status == 'pending')
                                            <span class="text-warning">Menunggu Persetujuan</span>
                                        @endif
                                    </td>
                                    <td><a target="_blank" href="{{ $permohonanPengunjung->link }}"> View Detail</a></td>
                                    <td class="text-center">
                                        <div class="d-flex">
                                            <a href="{{ route('dashboard.permohonan.edit', $permohonanPengunjung->slug) }}"
                                                class="btn btn-warning btn-sm mr-2">Edit</a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?')"
                                                action="{{ route('dashboard.permohonan.delete', $permohonanPengunjung->slug) }}"
                                                method="get">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm rounded-1">Del</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
