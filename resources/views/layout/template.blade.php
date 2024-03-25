<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kunjungan Ke Data Center Diskominfo Provsu</title>
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="../path/to/flowbite/dist/datepicker.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/logo-sumut.png') }}" type="image/x-icon">

</head>
<body>
    @include('komponen.navbar')
    @yield('konten')
    @include('komponen.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
</body>
</html>