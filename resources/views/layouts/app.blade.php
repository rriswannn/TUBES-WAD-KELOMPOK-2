<!-- File: resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AngkutSampah.com</title>

    <!-- Tautkan CSS Bootstrap dari CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Tautkan CSS Poppins Font -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">

    <!-- Gaya Kustom -->
    <style>
        body {
            font-family: 'figtree', sans-serif; /* Ganti dengan font yang diinginkan */
        }
    </style>
</head>
<body>
    <!-- Tambahkan navigasi di sini -->
    @include('partials._navbar')

    <!-- Bagian konten dari setiap halaman akan ditambahkan di sini -->
    @yield('content')

    <!-- ... (Tambahkan tag <script> atau elemen lainnya jika diperlukan) ... -->

    <!-- Tautkan jQuery dari CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Tautkan JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
