@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Riwayat Permohonan</h1>
    <p class="mb-4">Berikut adalah riwayat permohonan yang sudah disetujui/ditolak :</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">RIWAYAT PERMOHONAN RESERVASI KUNJUNGAN DATA CENTER DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI SUMATERA UTARA</h6>
            <br>
            <div>
                <a href="{{ route('dashboard.laporan') }}" id="print-link" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Simpan Laporan
                </a>
            </div>            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIP Penanggung Jawab</th>
                            <th scope="col">Nama Penanggung Jawab</th>
                            <th scope="col">Instansi Asal</th>
                            <th scope="col">Tanggal Kunjungan</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Waktu disetujui/ditolak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($riwayatPermohonan as $permohonan)
                            @if ($permohonan->status == 'approved' || $permohonan->status == 'rejected')
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $permohonan->nip }}</td>
                                    <td>{{ $permohonan->name }}</td>
                                    <td>{{ $permohonan->dinas->nama_dinas }}</td>
                                    <td>{{ $permohonan->date }}</td>
                                    <td>{{ $permohonan->subject }}</td>
                                    <td>
                                        @if ($permohonan->status == 'approved')
                                            <span class="text-success">Disetujui</span>
                                        @else
                                            <span class="text-danger">Ditolak</span>
                                        @endif
                                    </td>
                                    <td>{{ $permohonan->updated_at }}</td>                          
                                </tr>   
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('print-link').addEventListener('click', function(event) {
        event.preventDefault();
        var url = this.href;

        // Buka halaman laporan di jendela baru
        var printWindow = window.open(url, '_blank');

        // Tunggu halaman laporan dimuat, lalu cetak
        printWindow.addEventListener('load', function() {
            printWindow.print();
        });
    });
</script>

@endsection