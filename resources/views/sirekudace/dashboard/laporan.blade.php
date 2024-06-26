<div class="card-body">
    <div class="table-responsive">
        <h3 style="text-align:center">LAPORAN KUNJUNGAN DATA CENTER<br>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI SUMATERA UTARA</h3>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
            <thead>
                <tr>
                    <th scope="col-1">No.</th>
                    <th scope="col-1">NIP Penanggung Jawab</th>
                    <th scope="col-1">Nama Penanggung Jawab</th>
                    <th scope="col-1">Instansi Asal</th>
                    <th scope="col-1">Tanggal Kunjungan</th>
                    <th scope="col-1">Keterangan</th>
                    <th scope="col-1">Status</th>
                    <th scope="col-1">Waktu disetujui/ditolak</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counter = 1;
            @endphp
            @foreach ($riwayatPermohonan as $permohonan)
                @if ($permohonan->status == 'approved' || $permohonan->status == 'rejected')
                    <tr>
                        <td>{{ $counter++ }}.</td>
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

    <script>
        window.onload = function() {
            window.print();
        }
    </script>