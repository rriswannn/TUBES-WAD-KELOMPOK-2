<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="display-4" style="color: #28a745;">Tentang Kami</h2>
            <p class="lead">Selamat datang di halaman "About Us" dari AngkutSampah.com. Kami adalah platform pengelolaan sampah yang berkomitmen untuk memberikan solusi pengangkutan sampah yang efisien dan berkelanjutan.</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h4 style="color: #28a745;">Latar Belakang</h4>
            <p>Kami melihat masalah penumpukan sampah di sekitar Telkom University dan wilayah sekitarnya. Namun, kami juga menyadari bahwa sampah dapat diubah menjadi peluang. Dengan aplikasi AngkutSampah.com, siapa pun dapat dengan mudah mengatur pengangkutan sampah sesuai jenisnya dan mendaur ulang. Dengan ini, kami tidak hanya membersihkan lingkungan, tetapi juga mendapatkan uang dari sampah.</p>
        </div>
        <div class="col-md-6">
            <h4 style="color: #28a745;">Tagline</h4>
            <p>"TRASH MAKING CASH" - AngkutSampah.com membantu masyarakat serta perusahaan di sekitar kampus Telkom dengan cara membeli sampah daur ulang yang mereka miliki, sehingga dapat menjadi penghasilan tambahan bagi mereka.</p>
        </div>
    </div>

    <!-- Tambahkan elemen atau informasi lainnya sesuai kebutuhan -->

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h5 style="color: #28a745;">Kontak Kami</h5>
            <p>Email: info@angkutsampah.com</p>
            <p>Telepon: (021) 123-4567</p>
        </div>
    </div>
</div>

<!-- Animasi menggunakan Anime.js -->
<script src="https://cdn.jsdelivr.net/npm/animejs"></script>
<script>
    // Animasi menggunakan Anime.js (tambahkan animasi sesuai kebutuhan)
    anime({
        targets: 'h2',
        translateY: [-20, 0],
        opacity: [0, 1],
        easing: 'easeInOutQuad',
        duration: 800,
        delay: 300
    });

    anime({
        targets: 'p.lead',
        translateY: [-20, 0],
        opacity: [0, 1],
        easing: 'easeInOutQuad',
        duration: 800,
        delay: anime.stagger(100)
    });

    anime({
        targets: '.row',
        translateX: [-50, 0],
        opacity: [0, 1],
        easing: 'easeInOutQuad',
        duration: 800,
        delay: 500
    });
</script>
@endsection
