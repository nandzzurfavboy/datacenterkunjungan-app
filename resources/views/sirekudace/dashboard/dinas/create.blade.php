@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah OPD</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('dinas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_dinas">Kode Dinas</label>
                        <input type="text" class="form-control" id="kode_dinas" name="kode_dinas" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_dinas">Nama Dinas</label>
                        <input type="text" class="form-control" id="nama_dinas" name="nama_dinas" required>
                    </div>
                    <!-- Tambahkan field lain sesuai kebutuhan -->

                    <div class="d-flex gap-2 justify-content-end mt-4">
                        <a href="{{ route('dinas.index') }}"
                            class="btn btn-sm px-3 btn-secondary rounded-pill mr-2">Cancel</a>
                        <button type="submit" class="btn btn-sm px-3 btn-primary rounded-pill">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
