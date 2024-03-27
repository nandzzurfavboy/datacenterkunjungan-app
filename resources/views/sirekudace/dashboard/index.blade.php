@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Permohonan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPermohonan }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Permohonan Disetujui</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $permohonanDisetujui }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-check fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Menunggu Persetujuan
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $menungguPersetujuan }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Permohonan Ditolak</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $permohonanDitolak }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-times fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">
            {{-- Home --}}
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">SISTEM INFORMASI RESERVASI KUNJUNGAN DATA
                        CENTER DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI SUMATERA UTARA<br>(SIREKUDACE DISKOMINFO PROVSU)
                    </h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;"
                            src="{{ asset('assets/logo-sumut.png') }}" alt="...">
                    </div>
                    <p>Sistem Informasi Reservasi Kunjungan Data Center <a target="_blank" rel="nofollow"
                            href="https://diskominfo.sumutprov.go.id/">Dinas Komunikasi dan Informatika Provinsi Sumatera
                            Utara</a> adalah platform digital yang dirancang untuk memudahkan proses reservasi kunjungan ke
                        pusat data yang dikelola oleh Dinas Komunikasi dan Informatika di Provinsi Sumatera Utara. Sistem
                        ini bertujuan untuk memberikan layanan yang efisien dan terstruktur bagi para pengunjung yang ingin
                        berkunjung ke data center tersebut.

                        Dengan menggunakan Sistem Informasi Reservasi ini, pengguna dapat melakukan berbagai aktivitas,
                        seperti:
                    <ol>
                        <li>Pengguna dapat mendaftarkan kunjungan ke data center dengan mengisi formulir reservasi yang
                            telah disediakan.</li>
                        <li>Pengguna dapat memilih jadwal kunjungan yang tersedia sesuai dengan kebutuhan dan ketersediaan
                            dari data center.</li>
                        <li>Sistem ini juga memungkinkan untuk memverifikasi identitas pengunjung, seperti nomor identitas
                            pegawai atau informasi yang relevan lainnya.</li>
                        <li>Setelah pengguna melakukan reservasi, sistem akan memberikan konfirmasi atas reservasi yang
                            telah dibuat.</li>
                        <li>Data reservasi akan disimpan dan dikelola secara terstruktur untuk memudahkan pengelolaan oleh
                            pihak DISKOMINFO PROVSU.</li>
                    </ol>
                    Dengan demikian, Sistem Informasi Reservasi Kunjungan Data Center Dinas Komunikasi dan Informatika
                    Provinsi Sumatera Utara menjadi solusi yang efektif dalam mengatur dan mengelola proses reservasi
                    kunjungan ke data center tersebut secara efisien dan teratur.</p>
                    <a target="_blank" rel="nofollow" href="{{ url('/') }}">Reservasi Kunjungan Data Center Dinas
                        Komunikasi dan Informatika Provinsi Sumatera Utara &rarr;</a>
                </div>
            </div>
        </div>
    </div>
@endsection
