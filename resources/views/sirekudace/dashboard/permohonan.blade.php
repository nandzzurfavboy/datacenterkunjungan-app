@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Permohonan</h1>
        <p class="mb-4">Berikut adalah Permohonan Reservasi Kunjungan Data Center Dinas Komunikasi dan Informatika Provinsi Sumatera Utara</p>

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
                            <th scope="col" colspan="2" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($permohonanAdmin as $permohonanPengunjung)
                            @if ($permohonanPengunjung->status == 'pending')
                                <tr>
                                    <td>{{ $counter++ }}.</td>
                                    <td>{{ $permohonanPengunjung->nip }}</td>
                                    <td>{{ $permohonanPengunjung->name }}</td>
                                    <td>{{ $permohonanPengunjung->dinas->nama_dinas }}</td>
                                    <td>{{ $permohonanPengunjung->date }}</td>
                                    <td>{{ $permohonanPengunjung->subject }}</td>
                                    <td>
                                        @if ($permohonanPengunjung->status == 'pending')
                                            <span class="text-warning">Menunggu Persetujuan</span>
                                        @else
                                        @endif
                                    </td>
                                    <td>{{ $permohonanPengunjung->document }}</td>
                                    <td class="text-center"><a href='#' class="btn btn-warning btn-sm">Edit</a></td>
                                    <td class="text-center"><button type="submit" name="submit" class="btn btn-danger btn-sm rounded-1">Del</button></td>                          
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection