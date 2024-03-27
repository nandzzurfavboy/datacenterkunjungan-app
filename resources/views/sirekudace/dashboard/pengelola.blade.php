@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Pengelola SIREKUDACE DISKOMINFO PROVSU</h1>
        <p class="mb-4">Berikut adalah data Pengelola SISTEM INFORMASI RESERVASI KUNJUNGAN DATA CENTER DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI SUMATERA UTARA.</p>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DATA PENGELOLA SISTEM INFORMASI RESERVASI KUNJUNGAN DATA CENTER DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI SUMATERA UTARA</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">No.Telp</th>
                                <th scope="col" colspan="2" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2105102031</td>
                                <td>Prof.Dr.(HC).Ananda Aqilla Aqsa, S.Kom., S.H., M.Kom., M.Hum</td>
                                <td>Laki-laki</td>
                                <td>Kepala Staf Kepresidenan</td>
                                <td>089677275505</td>
                                <td class="text-center"><a href='#' class="btn btn-warning btn-sm">Edit</a></td>
					            <td class="text-center"><button type="submit" name="submit" class="btn btn-danger btn-sm rounded-1">Del</button></td>                          
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection