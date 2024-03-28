@extends('layout.admin')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Edit User | {{ $user->name }}</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Form</h1>
                </div>
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input required type="text" name="name" value="{{ $user->name }}" class="form-control "
                                id="name">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                        <div class="col-sm-10">
                            <input required type="number" name="nip" value="{{ $user->nip }}" class="form-control"
                                id="nip">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input required type="text" name="jabatan" value="{{ $user->jabatan }}" class="form-control "
                                id="jabatan">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="jk" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select required name="gender" class="form-select form-control"
                                aria-label="Default select example">
                                <option value="0" {{ $user->gender == 0 ? 'selected' : '' }}> Laki - Laki </option>
                                <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}> Perempuan </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputHp" class="col-sm-2 col-form-label">Nomer Hp</label>
                        <div class="col-sm-10">
                            <input required type="text" name="phone" value="{{ $user->phone }}" class="form-control"
                                id="inputHp">
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-end mt-4">
                        <a href="{{ route('users.index') }}"
                            class="btn btn-sm px-3 btn-secondary rounded-pill mr-2">Cancel</a>
                        <button type="submit" class="btn btn-sm px-3 btn-primary rounded-pill">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
