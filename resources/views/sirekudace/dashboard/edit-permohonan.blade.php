@extends('layout.admin')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Edit Permohonan <b>{{ $editPermohonan->name }}</b></h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Form Edit</h1>
                </div>
                <form action="{{ route('dashboard.permohonan.update', $editPermohonan->slug) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label for="name" class="col-sm-2 col-form-label">Nama Penanggung Jawab</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $editPermohonan->name }}" class="form-control " id="name"
                                readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{ $editPermohonan->nip }}" class="form-control" id="nip"
                                readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" value="{{ $editPermohonan->email }}" class="form-control " id="email"
                                readonly>
                            {{-- <small><b>PS*</b> : Kosongkan jika tidak ada</small> --}}
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                        <div class="col-sm-10">
                            <select style="background-color: #eaecf4; pointer-events: none; touch-action: none;"
                                class="form-select form-control" aria-label="Default select example">
                                @foreach ($listDinas as $item)
                                    <option {{ $editPermohonan->dinas->id == $item->id ? 'selected' : '' }}
                                        value="{{ $item->id }}">
                                        {{ $item->nama_dinas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputHp" class="col-sm-2 col-form-label">Nomer Hp</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $editPermohonan->phone }}" class="form-control " id="inputHp"
                                readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="subject" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $editPermohonan->subject }}" class="form-control "
                                id="subject" readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="instansi" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                            <select style="background-color: #eaecf4; pointer-events: none; touch-action: none;"
                                class="form-select form-control" aria-label="Default select example">
                                <option value="{{ $editPermohonan->time }}">
                                    {{ $editPermohonan->time }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="peserta" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $editPermohonan->quota }}" class="form-control " id="peserta"
                                readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="peserta" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $editPermohonan->address }}" class="form-control "
                                id="peserta" readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="kunjungan" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" value="{{ $editPermohonan->date }}" class="form-control "
                                id="kunjungan" placeholder="tanggal lahir">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" name="status" aria-label="Default select example">
                                <option value="pending" {{ $editPermohonan->status == 'pending' ? 'selected' : '' }}>
                                    Pending</option>
                                <option value="approved" {{ $editPermohonan->status == 'approved' ? 'selected' : '' }}>
                                    Approved</option>
                                <option value="rejected" {{ $editPermohonan->status == 'rejected' ? 'selected' : '' }}>
                                    Rejected</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="deskripsi" class="col-sm-2 py-0 col-form-label">Note</label>
                        <div class="col-sm-10">
                            <textarea class="form-control " name="note" id="exampleFormControlTextarea1" rows="4"
                                placeholder="Note...">
                            </textarea>
                            <small><b>PS*</b> : Boleh dikosongkan jika tidak ada</small>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-end mt-4">
                        <a href="http://arsip-app.test/teachers"
                            class="btn btn-sm px-3 btn-secondary rounded-pill mr-2">Cancel</a>
                        <button type="submit" class="btn btn-sm px-3 btn-primary rounded-pill">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
