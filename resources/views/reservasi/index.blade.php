@extends('layout.template')

@section('konten')
<div class="container min-h-screen px-6 flex flex-col justify-center lg:w-3/4 w-full mx-auto gap-7 lg:-mt-10 mt-4 md:-mt-0 ">
    <h1 class="text-2xl font-bold font-inter text-slate-800 md:text-2xl lg:text-3xl">Halo Selamat Datang,</h1>
    <p class="text-base md:text-lg lg:text-xl">Anda berada di halaman Reservasi Kunjungan Data Center <span class="font-bold text-sky-800">DISKOMINFO PROVINSI SUMATERA UTARA</span>. Anda dapat mengajukan permohonan kunjungan dengan mengisi data diri pada <a href="{{ route('create') }}" class="font-bold">Form Permohonan Kunjungan</a>, atau mengecek status permohonan anda pada halaman <a href="{{ route('reservasi.cekstatus') }}" class="font-bold">Cek Status Permohonan</a>.</p>
    <p class="text-sm md:text-base lg:text-lg leading-10 text-gray-800 font-bold lg:mt-6">Apa yang ingin anda lakukan?</p>

    <div class="flex flex-col gap-5 md:flex-row lg:flex-row -mt-6 md:-mt-2">
        <a href="{{ route('create') }}" class="flex items-center block max-w-sm p-6 border border-gray-200 rounded-lg shadow bg-gray-800">
            <img src="{{ asset('assets/reservasi-new.png') }}" alt="Permohonan Reservasi" class="w-20 h-15 mr-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Permohonan Reservasi</h5>
        </a>
        
        <a href="{{ route('reservasi.cekstatus') }}" class="flex items-center block max-w-sm p-6 border border-gray-200 rounded-lg shadow bg-gray-800">
            <img src="{{ asset('assets/aprroved.png') }}" alt="Cek Status Permohonan" class="w-20 h-15 mr-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Cek Status Permohonan</h5>
        </a>        
    </div>

    <div class="lg:mt-5">
        <p class="text-base md:text-lg lg:text-xl mb-5">Apabila anda mengalami kesulitan, silakan menghubungi<a href="https://diskominfo.sumutprov.go.id/hubungi-kami.html" class="font-bold text-sky-800"> Pusat Bantuan Dinas Komunikasi dan Informatika Provinsi Sumatera Utara</a>.</p>
    </div>
</div>
@endsection
