@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Pengelola SIREKUDACE DISKOMINFO PROVSU</h1>
        <p class="mb-4">Berikut adalah data Pengelola SISTEM INFORMASI RESERVASI KUNJUNGAN DATA CENTER DINAS KOMUNIKASI DAN
            INFORMATIKA PROVINSI SUMATERA UTARA.</p>
            @if (auth()->user()->role == 'superadmin')
        <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-2"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DATA PENGELOLA SISTEM INFORMASI RESERVASI KUNJUNGAN DATA CENTER
                    DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI SUMATERA UTARA</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">No.Telp</th>
                                @if (auth()->user()->role == 'superadmin')
                                    <th scope="col" class="text-center">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $item->nip }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        {{ $item->gender == 0 ? 'Laki-laki' : 'Perempuan' }}
                                    </td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->phone }}</td>
                                    @if (auth()->user()->role == 'superadmin')
                                        <td class="text-center">
                                            <div class="d-flex">
                                                <a href='{{ route('users.edit', $item->id) }}'
                                                    class="btn btn-warning btn-sm mr-2">Edit</a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?')"
                                                    action="{{ route('users.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm rounded-1">Del</button>
                                                </form>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
