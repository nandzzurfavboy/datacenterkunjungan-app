@extends('layout.template')

@section('konten')
    <div
        class="container min-h-screen items-center justify-center flex flex-col lg:w-3/4 w-full mx-auto gap-4 lg:-mt-6 -mt-6">
        <form action="{{ route('petitions.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-12 px-6 xl:px-6">
            @csrf
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-xl font-bold leading-7 text-gray-900 md:text-2xl lg:text-3xl md:w-3/4 lg:w-3/4">Form
                    Permohonan Reservasi <br>
                    Kunjungan Data Center <br> Dinas Komunikasi dan Informatika Provinsi Sumatera Utara</h2>
                <p class="mt-6 text-lg leading-6 text-gray-800">Harap mengisi data dibawah ini dengan sebenar-benarnya.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4 xl:col-span-9">
                        <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama Penanggung
                            Jawab/Nama Pengunjung</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="name" id="nama" autocomplete="nama"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 xl:col-span-9">
                        <label for="nip" class="block text-sm font-medium leading-6 text-gray-900">Nomor Identitas
                            Pegawai Negeri Sipil (NIP)</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="nip" id="nip" autocomplete="nip"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:items-start md:justify-center md:col-span-7">
                        <div class="sm:col-span-3">
                            <label for="instansi" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Organisasi/Instansi Asal</label>
                            <div class="mt-2">
                                <select id="instansi" name="dinas_id" autocomplete="instansi-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 px-3">
                                    @foreach ($listDinas as $dinas)
                                        <option value="{{ $dinas->id }}" class="text-black">{{ $dinas->nama_dinas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 xl:col-span-9">
                        <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat
                            Organisasi/Instansi</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="address" id="alamat_organisasi" autocomplete="alamat_organisasi"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 xl:col-span-9">
                        <label for="no_telp" class="block text-sm font-medium leading-6 text-gray-900">Nomor Telepon
                            Penanggung Jawab</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="phone" id="no_telp" autocomplete="no_telp"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 xl:col-span-9">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat Email</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="email" id="email" autocomplete="email"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full xl:col-span-7">
                        <label for="tujuan" class="block text-sm font-medium leading-6 text-gray-900">Maksud dan Tujuan
                            Kunjungan</label>
                        <div class="mt-2">
                            <textarea required id="tujuan" name="subject" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
                    </div>

                    <div class="flex flex-col md:items-start md:justify-center md:col-span-7">
                        <label for="tanggal_kunjungan" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                            Kunjungan</label>
                        <div class="relative max-w-sm mt-2">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input required datepicker type="text" name="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Select date">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="waktu_kunjungan" class="block text-sm font-medium leading-6 text-gray-900">Waktu
                            Kunjungan</label>
                        <div class="mt-2">
                            <select required id="waktu_kunjungan" name="time" autocomplete="waktu_kunjungan-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 px-3">
                                <option>08.00 - 12.00</option>
                                <option>13.00 - 16.30</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-col md:items-start md:justify-center md:col-span-7">
                        <label for="peserta" class="block mb-2 text-sm font-medium text-black">Jumlah
                            Peserta:</label>
                        <div class="relative flex items-center max-w-[11rem]">
                            <button type="button" id="decrement-button" data-input-counter-decrement="peserta"
                                class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="text" name="quota" id="peserta" data-input-counter
                                data-input-counter-min="1" data-input-counter-max="10"
                                aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6"
                                placeholder="" value="3" required>
                            <div
                                class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                                <span>Peserta</span>
                            </div>
                            <button type="button" id="increment-button" data-input-counter-increment="peserta"
                                class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500">Silahkan menentukan peserta
                            yang akan berkunjung.</p>
                    </div>

                    <div class="col-span-full">
                        <label for="dokumen_pendukung"
                            class="block mb-2 text-sm font-medium leading-6 text-gray-900">Unggah Dokumen</label>
                        <input name="document"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                </div>

                <div class="relative flex gap-x-3 mt-5">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="check" value="checked" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-sm leading-6">
                        <label for="comments" class="font-medium text-gray-900">Saya menyatakan bahwa saya menyetujui <a
                                href="#" class="text-sky-400 bold">syarat dan ketentuan</a> yang berlaku</label>
                        <p class="text-gray-500">Anda harus menyetujui syarat dan ketentuan yang berlaku!</p>
                    </div>
                </div>

            </div>

            <div class="mt-6 w-full flex items-center justify-center gap-x-6 p-5">
                <a class="text-sm font-semibold leading-6 text-gray-900" href="{{ route('home') }}">
                    Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajukan
                    Permohonan</button>
            </div>
        </form>
    </div>
@endsection
