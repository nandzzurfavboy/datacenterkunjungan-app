@extends('layout.template')

@section('konten')
<div class="container min-h-screen w-full px-6 mt-4 flex justify-center items-center mx-auto">
    <div class="w-3/4 -mt-16 mx-auto">
        <h1 class="text-2xl font-medium font-inter text-slate-800 md:text-2xl lg:text-4xl mb-5">Cek Status Permohonan Reservasi Kunjungan Data Center DISKOMINFO PROVINSI SUMATERA UTARA</h1>
        <p class="text-sm md:text-base lg:text-lg leading-5 text-gray-800 font-bold lg:mt-10">Kode Reservasi</p>

        <form action="" method="POST" class="max-w-md mx-auto md:mx-0">
            <div class="relative z-0 w-full mb-5 group">
                <input type="kode_reservasi" name="kode_reservasi" id="kode_reservasi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="contoh: DKIXXX" required />
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Cek Status Permohonan</button>
        </form>

        <p class="text-base mt-10">Apabila anda mengalami kesulitan, silakan menghubungi<a href="https://diskominfo.sumutprov.go.id/" class="font-bold text-sky-800"> Pusat Bantuan Dinas Komunikasi dan Informatika Provinsi Sumatera Utara</a>.</p>
    </div>
</div>
@endsection