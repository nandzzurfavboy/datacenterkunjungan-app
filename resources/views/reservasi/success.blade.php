@extends('layout.template')

@section('konten')
    <div class="container min-h-screen w-full px-6 flex justify-center items-center mx-auto">
        <div class="w-2/3 flex items-center justify-center gap-10">
            <div class="intro">
                <h1 class="text-2xl font-medium font-inter text-slate-800 md:text-2xl lg:text-3xl mb-2">
                    Terima Kasih, Reservasi
                    Anda Berhasil Diajukan!</h1>
                <p class="text-sm md:text-base lg:text-lg leading-5 text-gray-800 font-bold">Kode Reservasi Anda :</p>
                <small class="text-xs text-gray-500">Silakan simpan kode reservasi ini untuk keperluan selanjutnya.</small>
                <p class="random-token text-2xl font-bold text-sky-800 cursor-pointer" onclick="copyToken(this)">
                    {{ $petition->token }}
                </p>
                <p class="text-base mt-2">Silakan cek status reservasi anda pada halaman
                    <br>
                    <a href="{{ route('reservasi.cekstatus') }}" class="font-bold text-sky-800">Cek Status Permohonan</a>.
                </p>
            </div>
            <img class="w-1/2" src="{{ asset('assets/confirmed.svg') }}" alt="">
        </div>
    </div>
    <script>
        function copyToken(element) {
            const token = element.textContent.trim(); // Menghapus spasi di awal dan akhir

            // Create a temporary input element
            const tempInput = document.createElement('input');
            tempInput.value = token;
            document.body.appendChild(tempInput);

            // Select the text in the input element
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); /* For mobile devices */

            // Copy the selected text
            document.execCommand('copy');

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // Show alert
            alert('Token berhasil disalin ke clipboard!');
        }
    </script>
@endsection
